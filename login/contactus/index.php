<?php
	error_reporting(0);
	$msg="";
	if(isset($_POST['submit'])) {
		$to = "subhasrim2001@gmail.com";
		$subject = "Form Submission";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$msgBody = 'Name :'.$name.' has written you : '.$message;
		$headers = 'From:subhasrim2001.2@gmail.com';
		$secretKey = "6Lf__KIZAAAAAEjRkgSTkvqZeRrSwnAviqcfbk1k";
		$responseKey = $_POST['g-recaptcha-response'];
		$url =  "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";
		$response = file_get_contents($url);
		$response = json_decode($response);
		if($response->success){
			if(mail($to, $subject, $msgBody, $headers)){
				$msg = "Message Sent Successfully!";
			}
			else{
				$msg = "Failed to send the message!";
			}
		}
		else {
			$msg = "Verification Failed!";
		}
	}
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Subhasri Manigandan">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Contact us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href = "styles.css">
	<style>
body {margin:0;font-family:Arial}
#mySidenav a {
  position: fixed;
  right: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 16px;
  font-weight:bold;
  color: white;
  border-radius: 5px 0px 0px 5px;
}

#mySidenav a:hover {
  right: 0;
}
#home {
  top: 120px;
  background-color: #ff5050;
}

#about {
  top: 180px;
  background-color:#00cc66;
}

#products {
  top: 240px;
  background-color: #ff5050;
}

#pages {
  top: 300px;
  background-color: #00cc66;
}

#contact {
  top: 360px;
  background-color: #ff5050;
}
div.p {
	font-size:50px;
	font-weight:bold;
	background-color:pink;
	color:brown;
	text-align:center;
}

</style>
	</head>
	<body class="bg-secondary" id="myPage">
	<br>
	<div class="p">
		Contact
	</div>
	<!--Sidenav bar
	<div id="mySidenav" class="sidenav">
	  <a href="hhome1.html" id="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
	  <a href="about.html" id="about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
	  <a href="product.html" id="products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products</a>
	  <a href="#" id="pages">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pages</a>
	  <a href="contfoot.html" id="contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a>
	</div>
	-->
		<div class="container">
			<div class="row">
				<div class="w3-col m5 bg-black">
					<div class="w3-padding-16"><span class="w3-xlarge w3-border-pink w3-bottombar">Contact Us</span></div>
						<h3>Address</h3>
						<p>Swing by for a cup of coffee, or whatever.</p>
						<p><i class="fa fa-map-marker w3-text-pink w3-xlarge"></i>  Coimbatore, India</p>
						<p><i class="fa fa-phone w3-text-pink w3-xlarge"></i>  +00 1515151515</p>
						<p><i class="fa fa-envelope-o w3-text-pink w3-xlarge"></i>  subhasrim2001.2@gmail.com</p>
				</div>
				<div class="w3-col m7 bg-light rounded">
					<h4 class="text-center text-dark p-2"> Contact us!</h4>
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-2">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Enter name" required>
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Enter email" required>
						</div>
						<div class="form-group">
							<textarea name="message" class="form-control" rows="4" placeholder="Write your message" required></textarea>
						</div>
						<div class="form-group">
							 <div class="g-recaptcha" data-sitekey="6Lf__KIZAAAAABxac7a96GQll-elVkb5vB-yCtaX">
							 </div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Send" class="btn btn-outline-dark btn-block">
						</div>
						<div class="form-group">
							<h4 class="text-success text-center"><?= $msg; ?></h4>
						</div>
					</form>
					</div>
				</div>
			</div>
			<div class="rating-box">
			<h1>Rating System</h1>
				<div class = "ratings">
					<span class = "fa fa-star-o"></span>
					<span class = "fa fa-star-o"></span>
					<span class = "fa fa-star-o"></span>
					<span class = "fa fa-star-o"></span>
					<span class = "fa fa-star-o"></span>
				</div>
				<input type = "text" id = "rating-value">
			</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380510.67419105984!2d-88.01215594077645!3d41.83390416685132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sin!4v1591722868685!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<br><br>
		<!-- Footer -->
		<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
		  <h4>Follow Us</h4>
		  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
		  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
		  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
		  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
		  <a class="w3-button w3-large w3-pink w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
		  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">AC Association</a></p>

		  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
			<span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
			<a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
			<i class="fa fa-chevron-circle-up"></i></span></a>
		  </div>
		</footer>
		<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
			x.className += " responsive";
		  } else {
			x.className = "topnav";
		  }
		}
		</script>
		<script src="script.js"></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</body>
</html>