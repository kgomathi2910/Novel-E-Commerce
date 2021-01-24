<?php
session_start();
require 'config/db.php';
require_once 'emailController.php';
$errors = array();
$username = "";
$email = "";
//if user clicks on the sign up button
if(isset($_POST['signup-btn'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	//validation
	if(empty($username)) {
				$errors['username'] = "Username required";
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Email address is invalid";
	}
	if(empty($email)) {
		$errors['email'] = "Email required";
	}
	if(empty($password)) {
				$errors['password'] = "Password required";
	}
	if($password !== $passwordConf) {
		$errors['password'] = "The two password do not match";
	}
	//unique email validation
	$emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
	$stmt = $conn->prepare($emailQuery);
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$userCount = $result->num_rows;
	$stmt->close();
	if ($userCount > 0) {
		$errors['email'] = "Email already exists";
	}
	if(count($errors )=== 0) {
		$password = password_hash($password, PASSWORD_DEFAULT); //encrypts the password
		$token = bin2hex(random_bytes(50)); //random string
		$verified = false;
		$sql = "INSERT INTO users (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssbss", $username, $email, $verified, $token, $password);
		if($stmt->execute()) {
			//login
			//using sessions
			$user_id = $conn->insert_id;
			$_SESSION['id'] = $user_id;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['verified'] = $verified;
			//email to user
			sendVerificationEmail($email, $token); //email address and unique token generated
			//flash message
			$_SESSION['message'] = "You are now logged in!";
			$_SESSION['alert-class'] = "alert-success";
			header('location: index.php');
			exit();
		} 
		else {
			$errors['db_error'] = "Database error: failed to register";
		}
	}
}
//login button clicked
if(isset($_POST['login-btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	//validation
	if(empty($username)) {
				$errors['username'] = "Username required";
	}
	if(empty($password)) {
				$errors['password'] = "Password required";
	}
	if(count($errors )=== 0) {
		$sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('ss', $username, $username);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_assoc();
		if($user == NULL)
		{
			$errors['invalid_user'] = "Invalid username";
		}
		elseif(password_verify($password, $user['password'])) {
			//login
			//using sessions
			$_SESSION['id'] = $user['id'];
			$_SESSION['username'] = $user['username'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['verified'] = $user['verified'];
			//flash message
			$_SESSION['message'] = "You are now logged in!";
			$_SESSION['alert-class'] = "alert-success";
			header('location: index.php');
			exit();
		}
		else {
			$errors['login_fail'] = "Wrong Credentials";
		}
	}

}
//logout
if(isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['verified']);
	header('location: login.php');
	exit();
}
//verify user using tokens
function verifyUser($token)
{
	global $conn;
	$sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_assoc($result);
		$update_query = "UPDATE users SET verified=1 WHERE token='$token'";
		if(mysqli_query($conn, $update_query)) {
			//log in the user
			//login
			//using sessions
			$_SESSION['id'] = $user['id'];
			$_SESSION['username'] = $user['username'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['verified'] = 1;
			//flash message
			$_SESSION['message'] = "Your email address was successfully verified!";
			$_SESSION['alert-class'] = "alert-success";
			header('location: index.php');
			exit();
		}
	}
	else {
		echo 'User not found';
	}
}
//Forgot password
//if user forgets password and clicks on the forgot password button
if(isset($_POST['forgot-password'])) {
	$email = $_POST['email'];
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Email address is invalid";
	}
	if(empty($email)) {
		$errors['email'] = "Email required";
	}
	if(count($errors) == 0) {
		$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		$token = $user['token'];
		sendPasswordResetLink($email, $token);
		header('location: password_message.php'); //redirect
		exit(0);
	}
}
//if user clicks on reset password button 
//present in reset_password page
if(isset($_POST['reset-password-btn'])) {
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	if(empty($password) || empty($passwordConf)) {
				$errors['password'] = "Password required";
	}
	if($password !== $passwordConf) {
		$errors['password'] = "The two password do not match";
	}
	//encrypt password
	$password = password_hash($password, PASSWORD_DEFAULT);
	$email = $_SESSION['email']; //from the resetpassword function
	if(count($errors) == 0) {
		$sql = "UPDATE users SET password='$password' WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if($result) {
			header('location: login.php');
			exit(0);
		}
	}
}
//forgot password using tokens
//after user clicks on the link sent in the email
function resetPassword($token)
{
	global $conn;
	$sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);
	$_SESSION['email'] = $user['email'];
	header('location: reset_password.php');
	exit(0);
}
