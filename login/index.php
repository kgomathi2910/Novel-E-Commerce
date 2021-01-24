<?php 
require_once 'controllers/authController.php';
//verify user using tokens
if(isset($_GET['token'])) {
	$token = $_GET['token'];
	verifyUser($token);
}
//verify user using tokens
if(isset($_GET['password-token'])) {
	$passwordToken = $_GET['password-token'];
	resetPassword($passwordToken);
}
if(!isset($_SESSION['id'])) {
	header('location: login.php');
	exit();
}
//if user didnt login redirect to login page
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>HomePage</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col md-4 offset-md-4 form-div login">
					<?php if(isset($_SESSION['message'])): ?>
						<div class="alert <?php echo $_SESSION['alert-class']; ?>">
							<?php 
								echo $_SESSION['message'];
								unset($_SESSION['message']);
								unset($_SESSION['alert-class']);
							?>
						</div>
					<?php endif; ?>
					<h3> Welcome, <?php echo $_SESSION['username']; ?></h3>
					<a href="index.php?logout=1" class="logout">logout</a>
					<?php if(!$_SESSION['verified']): ?>
						<div class="alert alert-warning">
							You need to verify your account.
							Sign in to your email account and click on the verification link we just emailed you at 
							<strong><?php echo $_SESSION['email']; ?></strong>
						</div>
					<?php endif; ?>
					`	<div class="alert alert-warning">
						<a href="http://localhost/package/login/hhome1.php" class="back">Back to Homepage</a>	
						</div>
					<?php if($_SESSION['verified']): ?>
						<button class="btn btn-block btn-lg btn-primary">I am verified!</button>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</body>
</html>