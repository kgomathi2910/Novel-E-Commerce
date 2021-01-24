<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family:Lucida, sans-serif ;
}
.topnav {
  overflow: hidden;
  background-color: #851B53;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 15px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: grey;
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav a.logo {
  font-size: 25px;
  font-weight: bold;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.header-right {
    float: right;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
 #intf {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #BE1B3B;
  text-align: center;
  cursor: pointer;
  width: 30%;
  font-family:"Times New Roman", Times, serif;
  font-size: 18px;
  margin:auto;
}
div.e {
	font-size: 20px;
	background: linear-gradient(to bottom left, #00ccff 0%, #ffff99 100%);
}
div.p {
	font-size:50px;
	font-weight:bold;
	background-color:pink;
	color:brown;
	text-align:center;
}
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
  z-index: 1;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.immediate.co.uk/production/volatile/sites/3/2020/01/agatha-christie-books-33ea1e4.jpg?quality=90&resize=768,574");
  height: 30%;
  background-position: center;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
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
div.a {
background-color:#666666;
width:100%;
text-align:center;
font-size:20px;
color:white;
}
div.b1 {
background-color:#3D3D3D;
width:100%;
text-align:center;
font-size:20px;
color:white;
}
div.c1 {
float:left;
padding:40px 0px 20px 130px;
}
div.c {
float:left;
padding:40px 0px 20px 180px;
}
div.d {
float:left;
padding:40px 20px 20px 0px;
}
div.q1 {
float:left;
padding:20px;
width:20%;
}
div.q2 {
float:left;
padding:20px;
text-align:center;
background: linear-gradient(to bottom, #0099cc 0%, #ffffcc 100%);
min-width: 700px;
}
div.q {
margin:auto;
outline:1px;
}
table#table1 th {
  border: 1px solid grey;
  background-color: yellow;
 
}
A {text-decoration: none;}

div.f {
  padding: 30px;
  margin: auto;
}

div.b {
padding:53px;
float: left;
}


#intf  {
  border-radius: 5px;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #BE1B3B;
  text-align: center;
  cursor: pointer;
  width: 70%;
  font-family:"Times New Roman", Times, serif;
  font-size: 14px;
  margin:auto;
}
#intf:hover {
  opacity: 0.7;
}
div.p {
	font-size:35px;
	font-weight:bold;
	background-color:pink;
	color:brown;
	text-align:center;
}
div.s {
	font-size:18px;
	background: linear-gradient(to bottom, #33cccc 0%, #ffffcc 100%);
	color: black;
	margin: auto;
	width: 600px;
	padding: 20px;
}
</style>
</head>

<body>
<!-- Navbar -->
<div class="topnav" id="myTopnav">
	<a href="http://localhost/package/login/hhome1.php">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSg_0rkxtmrAuZNlTg56ji2fx4qClIrF4ZAtsV_CBi9If-gdYgW&usqp=CAU" style="width:60px">
	</a>
	<a href="http://localhost/package/login/hhome1.php" class="logo aq">THE HOME OF <br>AGATHA CHRISTIE</a>
<div class="header-right">
  <a href="http://localhost/package/login/hhome1.php" class="active"><br>Home</a>
  <a href="http://localhost/package/login/about.php"><br>About</a>
  <a href="http://localhost/package/login/product.php"><br>Products</a>
  <div class="dropdown">
    <button class="dropbtn"><br>Pages 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      	<a href="http://localhost/package/login/login.php" target="_blank">Login</a>
		<a href="http://localhost/package/login/signup.php" target="_blank">Sign Up</a>
		<a href="index.php?logout=1" target="_blank">Signout</a>
		<a href="http://localhost/package/cart/public/" target="_blank">Shop Now</a>
    </div>
  </div>  
  <a href="http://localhost/package/login/contactus/index.php" target="_blank"><br>Contact</a>
	<?php
		if(isset($_SESSION['id'])): ?>
		
		<h3 style="color:white;"> Welcome, <?php echo $_SESSION['username']; ?></h3>
		
	<?php endif; ?>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
<!--Sidenav bar-->
<div id="mySidenav" class="sidenav">
  <a href="http://localhost/package/login/hhome1.php" id="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
  <a href="http://localhost/package/login/about.php" id="about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
  <a href="http://localhost/package/login/product.php" id="products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products</a>
  <a href="http://localhost/package/cart/public/" target="_blank" id="pages">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ShopNow</a>
  <a href="http://localhost/package/login/contactus/index.php" target="_blank" id="contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a>
</div>


<br>
<div class="p">
	100 years of Agatha Christie Stories!
</div>
<br><br>
<div class="s">


2020 marks 100 years since the publication of Agatha Christie’s first novel, The Mysterious Affair at Styles – the book that introduced Hercule Poirot to the world. We’re celebrating 100 years of Agatha Christie stories with a host of activities and events for readers, viewers, listeners and fans. Join us as we celebrate what we love about the Queen of Crime, her timeless stories and her unique characters.<br><br>

Look out for exclusive content, our 2020 reading challenge, the launch of Sophie Hannah’s latest Poirot novel The Killings at Kingfisher Hill, and of course the big screen release of Death on the Nile with Kenneth Branagh and an all-star cast. Read on to find out more about our celebrations.<br><br>

We’ll keep you updated on our website, and on social media using #100YearsofChristie.<br><br>

 </div>
 <br>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-pink w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="http://localhost/package/login/hhome1.php" target="_self">AC Association</a></p>
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-pink w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="http://localhost/package/login/agatha100.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
</body>
</html>