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
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("data:image/jpeg;base64,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");
  height: 35%;
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

.mySlides {display: none}

#qwe {
float: right;

}
div.s {
	font-size:18px;
	background: linear-gradient(to top left, #00cc99 0%, #ffffcc 100%);
	color: black;
	width: 600px;
	padding: 20px;
	width:100%;
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
<br>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">GREENWAY HOUSE</h1>
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
<div class="s">
Take a glimpse into the life of Agatha Christie and her family at her former holiday home in Devon. The relaxed and atmospheric Georgian house is still set in the 1950s, and situated in a large and romantic woodland garden which sweeps down the hillside towards the River Dart. <br><br>

Agatha Christie (known locally by her married name Mrs Mallowan) spent many happy years at Greenway, and would gather the family to holiday here once her latest book was complete, or to celebrate the seasons. They would relax by the river, play croquet and clock golf, or read her latest mystery to guests. <br><br>

Each room in the house is full of items collected by Christie and her family, and brought to Greenway from her childhood home or archaeological digs with her second husband Max. <br><br>

From walled gardens to riverside woodland, the informal gardens at Greenway are peaceful and relaxing. There are hidden gems such as a restored vinery and peach house, views down river to take your breath away and deckchairs in front of the house to relax in. A visit to Greenway isn’t complete without a trip down to the bottom of the garden, and the Boathouse. Scene of the crime in Poirot’s Dead Man’s Folly and one of the most tranquil spots at Greenway. <br><br>

Why not take a peek inside Agatha Christie's Greenway as Christie's grandson, Mathew Prichard, takes you on a tour of the house and garden and shares some of his dearest memories. Greenway is looked after by the National Trust and open to visitors most of the year.<br><br>
</div>
<br><br><br>


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
    <a class="w3-button w3-theme" href="http://localhost/package/login/green.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
</body>
</html>