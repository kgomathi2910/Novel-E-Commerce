<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style>
body {margin:0;font-family:Arial}
.topnav {
  overflow: hidden;
  background-color: #851B53;
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
  background-color: purple;
  color: black;
}

.topnav .icon {
  display: none;
}

.topnav a.logo {
  font-size: 25px;
  font-weight: bold;
  font-family:"Times new roman" serif;
  text-shadow:1px 1px 0 #444;
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
div.ab {
	font-size: 34px;
	text-align: center;
	color: white;
	background: linear-gradient(to bottom, #9900cc 0%, #ffff99 100%);
	padding:10px 10px;
	border-radius: 25px;
}

.mySlides {display:none;}

#mySidenav a {
  position: fixed;
  right: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 14px;
  font-weight:bold;
  color: white;
  border-radius: 5px 0 0 5px;
  z-index: 1;
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

A {
text-decoration: none;
}

.w3-tangerine {
  font-family: "Tangerine", serif;
}

.w3-myfont {
  font-family: "Comic Sans MS", cursive, sans-serif;
}

.abcd {
	max-width: 340px;
	min-height: 450px;
	max-height: 450px;
	border: 2px solid black;
}

.as {
font-size: 25px;}

.asw {
width: 30%;
margin: auto;
}

.az {
max-height:300px;
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

<!--Sidenav bar-->
<div id="mySidenav" class="sidenav">
  <a href="http://localhost/package/login/hhome1.php" id="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
  <a href="http://localhost/package/login/about.php" id="about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
  <a href="http://localhost/package/login/product.php" id="products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products</a>
  <a href="http://localhost/package/cart/public/" target="_blank" id="pages">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ShopNow</a>
  <a href="http://localhost/package/login/contactus/index.php" target="_blank" id="contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a>
</div>

<br>
<!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="hp1.png" alt="image" style="width:100%">
  </div>
    <div class="w3-text-white">
		<div class="ab">
		  <h1 class="w3-jumbo w3-hide-small">The Ultimate Christie Reading Lists</h1>
		  <h1 class="w3-hide-large w3-hide-medium">The Ultimate<br> Christie<br> Reading Lists</h1>
		  <p><a href="http://localhost/package/cart/public/" target="_blank" class="w3-button w3-blue w3-padding-large w3-large w3-text-white w3-hover-teal w3-round-xlarge"><b>SHOP NOW!</b></a></p>
		</div>
	</div>
 
<div class="w3-center w3-padding-64">
      <span class="w3-xxlarge w3-bottombar w3-border-red w3-padding-16 w3-myfont">COLLECTIONS</span>
    </div> 
 
<!-- Cards -->
<div class="w3-row-padding w3-section w3-center">

  <div class="w3-third w3-amber w3-hover-lime">
    <div class="w3-card-4 abcd">
	<center>
      <img src="hp2.jpg" style="width:80%">
      <div class="w3-container w3-myfont">
        <h3 style="text-align:center"><b>The Top Five Miss Marple Novels</b></h3>
          <p>Explore the best Miss Marple stories <br> with this handy introduction </p>
          <p><a href="http://localhost/package/login/topfive.php"><button class="w3-button w3-red w3-block w3-text-white w3-hover-aqua w3-round-xlarge"><b>Read More</b></button></a></p>
      </div>
	 </center>
    </div>
  </div>

  <div class="w3-third w3-amber w3-hover-lime">
    <div class="w3-card-4 abcd">
	<center>
      <img src="hp3.jpg" style="width:80%">
      <div class="w3-container w3-myfont">
        <h3 style="text-align:center"><b>12 Things You Didn't Know About Murder on the Orient Express</b> </h3>
			<p>A dozen facts you might not know <br> about the famous story</p>
          <p><a href="http://localhost/package/login/things.php"><button class="w3-button w3-red w3-block w3-text-white w3-hover-aqua w3-round-xlarge"><b>Read More</b></button></a></p>
      </div>
	 </center>
    </div>
  </div>
  
  <div class="w3-third w3-amber w3-hover-lime">
    <div class="w3-card-4 abcd">
	<center>
      <img src="hp4.jpg" style="width:80%">
      <div class="w3-container w3-myfont">
        <h3 style="text-align:center"><b>TV Adaptations: A Quiz</b></h3><br>
			<p>Test your knowledge of Christie TV <br> adaptations</p>
          <p><a href="http://localhost/package/login/product.php"><button class="w3-button w3-red w3-block w3-text-white w3-hover-aqua w3-round-xlarge"><b>Read More</b></button></a></p>
      </div>
	 </center>
    </div>
  </div>

</div>
<br>

<div class="w3-panel w3-topbar w3-bottombar w3-pale-red w3-xxxlarge w3-serif w3-center">
    <p class="as"><i><b>"Very few of us are what we seem."</b></i></p>
	<p class="w3-myfont as">- Agatha Christie, The Man in the Mist</p>
  </div>
<br>

 <div class="w3-card-4" style="width:100%">
    <img src="hp5.jpg" style="width:100%">
    <div class="w3-container w3-center w3-black">
	
	<div class="w3-container w3-tangerine">
		<p class="w3-jumbo"><b>Celebrating 100 years of stories</b></p>
	</div>
	
		<p class="w3-myfont as"><b>This year we’re delighted to celebrate 100 years of Agatha<br> Christie stories with readers, viewers, 
		listeners and fans. There’ll be plenty of ways to <br>
		join in the festivities, beginning with our official reading challenge: Read Christie 2020<br> #readchristie2020.</b></p>
		<p><a href="http://localhost/package/login/agatha100.php">
        <button class="w3-button w3-red w3-block w3-round-xlarge w3-hover-aqua asw"><b>Read More</b></button></a>
    </div>
  </div>
</div>
<br>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l2" id="work">

<div class="w3-quarter w3-dark-gray w3-padding-16">
	<div class="w3-card-4 w3-light-blue w3-round-large w3-center"><h3><b>THE OFFICIAL HOME OF THE BEST-SELLING AUTHOR OF ALL TIME</b></h3></div>
		<p>Outsold only by the Bible and Shakespeare, Agatha Christie is the best-selling novelist of all time. She is best known 
		for her 66 detective novels and 14 short story collections.</p>			
		<p>Meet St Mary Mead's most famous resident</p>
		<a href="http://localhost/package/login/product.php"><button class="w3-button w3-red w3-block w3-round-xlarge w3-hover-aqua"><b>Explore all of the stories</b></button></a>
</div>

<div class="w3-quarter w3-dark-gray">
<!--<div class="w3-circle w3-dark-gray">-->
  <img class="w3-circle az" src="data:image/jpeg;base64,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" style="width:80%">
 <!-- </div>-->
</div>

<div class="w3-quarter w3-dark-gray">
  <img class="w3-circle az" src="data:image/jpeg;base64,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" style="width:80%">
</div>

<div class="w3-quarter w3-dark-gray">
  <img class="w3-circle az" src="data:image/jpeg;base64,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" style="width:80%">
</div>

</div>

<br><br>

<!--Slideshow-->

<div class="w3-content w3-display-container w3-center">

<div class="w3-display-container w3-black mySlides">
  <img src="hp6.jpg" style="width:40%">
  <div class="w3-display-bottom w3-large w3-container w3-padding-16 w3-red">
    Amazon’s ‘The Pale Horse’ is a horrific take on Agatha Christie, in a good way...<br>-Sarah Phelps
  </div>
</div>

<div class="w3-display-container w3-black mySlides">
  <img src="hp7.jpg" style="width:40%">
  <div class="w3-display-bottom w3-large w3-container w3-padding-16 w3-dark-gray">
    Agatha Christie was the first grown-up author I read...<br>-Declan Hughes
  </div>
</div>

<div class="w3-display-container w3-black mySlides">
  <img src="hp8.jpg" style="width:40%">
  <div class="w3-display-bottom w3-large w3-container w3-padding-16 w3-blue">
    My favourite Agatha Christie novel, After the Funeral, has a brilliant plot...<br>-Sophie Hannal
  </div>
</div>

</div>
<br><br>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

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
    <a class="w3-button w3-theme" href="http://localhost/package/login/hhome1.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

</body>
</html>