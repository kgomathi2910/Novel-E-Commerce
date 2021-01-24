<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<link rel="stylesheet"
		  type="text/css"
		  href="bootstrap.css"
	      />
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
.navbar {
  overflow: hidden;
  background-color: #851B53;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #856E68;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
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

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.header-right {
    float: right;
}
.navbar a.logo {
  font-size: 25px;
  font-weight: bold;
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
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("ap1.jpg");
  height: 50%;
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
  background-color:#00cc66 ;
}

#products {
  top: 240px;
  background-color:#ff5050 ;
}

#pages {
  top: 300px;
  background-color: #00cc66;
}

#contact {
  top: 360px;
  background-color:#ff5050 ;
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

.card {
  float: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: Lucida, sans-serif;
  padding: 10px 10px 10px 10px;
  background-color: #ffffcc;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #BE1B3B;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
.mySlides {display: none}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  background-color:pink;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: black;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/*
   This is the css for the chapter thumbnails
   They are small boxes that show the first
   few lines of a chapter.
*/


.night{
    background:black;
    color:white;
}

.chapter-thumbnail {
  margin-top: 10px;   
  white-space : pre;  /* preserve the original line breaks and spacing
  						 (The content of the
  						 chapter is just text not HTML, so normally
  						 the line breaks would be ignored) */
  overflow : hidden;
  max-height: 150px; 
  height : 88px; 
  color: red;
  background: yellow;
  border-radius: 10px;/* rounded corners */
}

#mainViewer {
  margin-top: 10px;
  white-space : pre;  
}

.-img{
  max-height:300px;
  min-height:200px;
  max-width:100%;
  margin-bottom: 10px;
}

.abcd {
font-size:18px;
text-align:center;
background: linear-gradient(to bottom, #0099cc 0%, #ffffcc 100%);
min-width: 70%;
min-height: 200px;
padding: 10px;
}

.w3-myfont {
  font-family: "Comic Sans MS", cursive, sans-serif;
}
.w3-tangerine {
  font-family: "Tangerine", serif;
}

.abcde {
	max-width: 340px;
	min-height: 450px;
	max-height: 450px;
	border: 2px solid black;
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
<div class="p">
	About
</div>
<br>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">ABOUT AGATHA CHRISTIE</h1>
  </div>
</div>
<div class="a">
<br>--------&nbsp;&nbsp;&nbsp;   Writer, Traveller, Playwright, Wife, Mother, Surfer &nbsp;&nbsp;&nbsp;  --------<br><br>
</div>

<!--Sidenav bar-->
<div id="mySidenav" class="sidenav">
  <a href="http://localhost/package/login/hhome1.php" id="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
  <a href="http://localhost/package/login/about.php" id="about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
  <a href="http://localhost/package/login/product.php" id="products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products</a>
  <a href="http://localhost/package/cart/public/" target="_blank" id="pages">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ShopNow</a>
  <a href="http://localhost/package/login/contactus/index.php" target="_blank" id="contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a>
</div>

<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img class="-img" 
				  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSEhIVFRUVFxUVFRcYFxUXFxgYFxcXFxgXFxgYHSggGholHRUVITEiJSkrLi4uFx8zODMtNygtLisBCgoKDg0NFQ8PFSsZFRkrKysrLSsrLSsrKy0tLS0rLS0rLS0tNy0tLS03NzctNysrLTctLS0rLSsrNysrNystK//AABEIAK4BIgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xAA+EAABAwIDBAcGBAUEAwEAAAABAAIRAyEEEjEFQVGRBiJhcYGhsRMyUsHR8AcUQuEVYoKS8RYjQ3IzorJz/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECBP/EABkRAQEBAQEBAAAAAAAAAAAAAAARASESMf/aAAwDAQACEQMRAD8A9sCUIARC5WghEJUAiEIQEJEqECQhKhQIlKEIEhIQnIQIEICVQIUicgoEhIWpyCqI4SJ8IhFqOEmVS5U0hFNhIQlCcQmaISOKMqeUNSqY4JIUkIyohmVNyqYBEIqAhRlTvamlqggazikezgpYSkIKmRCljsQqNRBSpFpgJISoWQJEqEAhCFQISoVgRCVCQIhCFIBCEJAIQhMwCSUqE3AIhCECJrgnFNJUXCJCEqRFIClhIlBQKAlCSUqASQgpJUCPCjcpCVG4JFNfomuSprkEMoTpQqNRIhC1WAhIlUAhCFQqEiECoQkVCoSIUCoSIQKkQhAISoQIhCEAkKVIVAJjgnJCopkJUBEIpEqUIhAiWUEIQCSE5BQMKaVIUxygj3pjk+LpHIqFCdCFRoIQmlyrBUBJKSVFhyVNlEqpDkJpcq1bGgac9yVYtpJVA44iJGoBCd+cPYpTyvSkKpOxt4keaYcc74fvmqRooWU3abp931Un8TtJafNKRoSlCoOx/VJAm0xOqlGJ7NdLqUi2hVTif5fNH5v+VWk1ZQqzcWOCf+YHA+SUmpk0lRfmBwPl9VG7EjtUIsymZln19t0GWfUDT2qenjWOALTINwRcHxCLFlEqD8y37BSfmG8fIoLCJUHt28fVIcQz4vVBPmRKr/mG/EE4V2/EEExKMyi9s34hzTm1W/EOYQOJQ8WTDVb8Q5prq44jmFFISo8yixuOZSaHPNi5rbAm7jA0VZm1aJAh4voII3TwQXcyFwOMxmI9o/Ltak0ZnQ005LRJhpPEaJFR3dSrW+I/+v0VUuq6h7uOoV+o0HgqzxAk+CoiGJrcXcmo/N1hvP8AaEEmxBTXPfvBjsjzQOGPrDh/afkU07faxzW1XsbmkNmROmk96a+Z3kQvLfxhrEYjDASIpPIg/wA4+iuZUequ2zTcbPbH/YSrFOuHXzCDvlfN1LaFRv8AyO7sxjkTC1sHt+uyHCq6RxMjxBsd6eSvfKlQkiCLW1SPMDv+S8UrdJ3lmRznSdTp6blfZ0vJY0OMloAzQ2THC1lItepl5F9Zt+6c59tZEwV5I/pc85IfZriYMcDbTS6ts6WOI6z9bWgc7JCvT6VTknVK94+/BeU4XpAWujMS06XNvd381qs6RgiTUM3i5Bt3WQeg0aoItbsU9R680p9JHE3qln9YJ1U7ulj2QBUMTlsWuPf6JB6Cat5vEJC+xIXA0ek9SZNUmTAgAAX7jNoVvG9JXtpHJVObdOUjUa2WYtdqysU1uIcTey4ZnSSqYPtheAR7Np3zuPBW2bfrEgAgtuTLImOBlWDsTWdv4KljdpZGPqEgNaMxJ4LLxm08WaDn0WUiWgkg+8QNS1uhPYSFxWzdu1sRTxQfWJAoyAQ2JLhMCOAcB2kJEM23tdvXDGABxzmoC0k5j1sodo6y3ugW0KpL2tfmpezpOh18tQlzS0HuaTyXC7UwYLRUbUFRpeWgGzmgCbjfwnSy6/oTWbRwt4DnucTJMlreqNBYaqziO5biX6mPAbkjsYR2rIp7WET1dD+s8tOxD9stDZdkyjeHHuv1VFbFLaJv1R5qR2MlpkDn9VkVdpMFwQRvE+Qsqz9r05Di2pe8BpMckGvSxBm9xutqrlDEjRzYMSFi0dqU3Q7rAawRB8bqWptKjcyR22QaxxLRMwAPNNdihFgOKyaePpE+/eOFo4JBimbnNMW1ugvOxXEDvlM9szeq3tmG2YC2n33qPO0kdYILNTENBgDej8yw6gqs8NmSZ++KYxrDPWHZcfVFTGtR7eSFCXN7OY+qEHVSJ3eSa+mJ1HkoDRp315/RI6mN0+aqJmsHEc01wCruO63iE1zQeEDslBLx1PYMv1Xk34wYao7FUXNY6PYkT25ySOz9K9SLmgaf+qzdoYZtQ6wO4eNiriPDKOEq/qYVYGznnRpnhxXqbKdAvdSY9he2zh1ZBjQjhdOp7Fi5IJAvbXmlHl38Ir6lh79fRNdsuqBOU/fgvU6OyyybCNeqLorYK3VAB4x5fulI8nODO+eSifh3jd/nh3r1d+z81niewtBHhx5KvU2RTIjLTPe3Kb9ytI8yNN3hv/dM640Pr9/4XobujtI6Mn/rU+qZU6MMgnK8cOuPqlR5+2ZkzbelFQzqR4ld67YlINLTTfPEOzEH/roqR2BScZ/3QItLRr/bYeKVY5JuJduN9+h9R6KyMW6Im/GTyjRdK7o0wg5cQwROjXnwIg3VWj0Sec01qItwfJk8CBHeoMgYqq+A0SbNAaDJOgtNyV6RsHYgw1L2uJI9qROSZFMfN3E7lm7G2fR2cx2JxDmufpTIGlv0zeTxXL9Jelr8QTllrSSO39k+jV6TdMjdlI5QJFt+5c/0Sr3rMm76UD+kyucqvJN73T8LXLCHNMOBt6eclaiVr7QxQA6oEwBP3vVnYeJfTZmLjE9URNt/gsfDsdWeGnfJMAWE3PmOa3K2Dc+abdGjkJTRdPSOdQ0dpBOvgnUtt0yXF7SWxYNJEHjHYsv+D1ImT22/dMq7Lc2IdMz+g+EwT996nB0X+pKUBvW/ffvsrX+oKcOuRa3afBcezZNW0Cedu+2/sUztn1mFwgO1Ac0iDEiRMGD3KTFdFS26MgJJzb4jiI+auDbtItIdN43T81xBo1GzNN4HGCQnZXke47foDfvSDuKO12G+YAEmxEHdEqY45nxtixOkjibb1wOIL8sFjhxkHVV6lcmDN7Ce1WDun7RpsJE5iXuMzIALtSrFHHWzNc1s2bDr63MDtXCOLhGZrgCB+kgRxCgqYudLxpr3pB6KzatUOvWzD+nxFxPBaFHadV0XaTwIaTHLgvJfzDybSOEKzhsW5kF5cZm8kXvOljopB6s6ueLf7W/RC8y/ibfjPmkUV72BU+Ed6dFTe2fL0UeRpMQfM+aHg944XHyQOLX7gR4g+qa6k/e8jxUTsNJB39hd6qRpjUgeJPmgDTqDV4/t+hUNQP3lseI9ZT3NY69j2SFG7DtizR6+qDldt9DMPWeaocaNU9YvY7U8SJWK/DbUwf8A46zcTTH6TBdH/U35FegCiODeSiqUZ0DR4fRKOKwP4isByYqg+m7flvHe035LqNn7dwtcD2VZhPwk5XcnJMbsmjVGWtQpvHEi/pI5rlNqfh5ScScPUNN2uV8vb4HUeavEdw+j280x1J26Pv0XmhZtbA+7newcD7Vluw9YDkrmzfxK3V6QP8zDDvFrvqkK7p1M2GSe0R87qH8vH/G0tPbfkq+zelOErDq1g0n9NTqHhvt4grZe2QNw/lgg/VFVKuGMQLc1A3CO3gdtj9lagG6fUFMdIBtzn6KDNqYWLtaz5plOkGkueYDRLiexX3NES4QOz6rFxLfzNT8tJFNsPrG92z1ac8TF+yUwcZ002g6u1tU2pl+Wi3i1oOZ5HC7QO9chUfC6j8THxi20wIaykyBNusXaeDRyXKuIjWFvGdROKVkKP7490JzCqj0bBbEbSwFOpTa9xrBtaq8tAyta2zRwaHOG+61OgmAz+1qEj3gwWG4Zj/8AQWx+FtUV9mtp1Otl9pRIMxlBJa2+7K5o8Fp4HAMpmr7MNa01JgNsCGtByxoLeqxrRlXZjYtFjaQFV/h7JioweAHfchbziIjf3FVqo4nt3KKyK+zmHRt9AA2FE3ZFONGmd5Bnwut52mh5fumFjTqPJBkM2YybsaP6fuVOcAyLNaB2CPRaIpgWn5pXUR8R5JRnnDWy7gdLcEUMM1pHVB8B8gtWhhd+vh+6Q4cd3gUojpYhrgWOGWRZwuQe4rCp9DsIHS8McCbgNueS3xhyJgzw6pTm0nDUX3QCL+KlGeOhuzD/AMMdxc3nBTXdAsFBijmaZEF9R0Tvac1j2rRDHAzknjIWjhsa0CMpHddS6R5bW/DelmdGKrNEmB7OmYE6TF4QvVfzLO3khW6IabiT7hHh81K119PG/wBEraLGmwATwqI3g7h6qvVz7grRKYKv2VBUeH8D4BvmmCgd+YDtP0V0VP8ANlBVcTYi3Hq+YQVntA3+vzUVTWZJ8LJ9QEj9I/pn6KA9W/VHblIRSlwFj8kx9aNwHiipVm4dPLyESqNTFu4c/TU8FUXBUB1I4WJ+azNpdHcJX/8AJRaT8QGQ/wBzbqq/EvJuHNvuEpK+IeAA1lVzjwkcwPkEHP7T/DZuuHxBH8lUgt7g5t928FYzsJtTA3HtA1oImk72lMAiPdGkdrRELt3txEXYQNbw7Xs1WdVxuJZYNaR/+TvPKVfSRlbO/Emr/wA1OnUtq2WmRuNzqukwHTnCVBBqGi42ioIA/qEt1XJ7Q2fVxHvUgXcRScHf3arPq9DMTq1pA4H6aq8Ouu2vtLGUhnDqdZhEsiwPaSJHKFY6G44Znuy1HCqW/wC45oABbaHCZEZj1tCOC47A9EcaCMpy/wBQA8RMR3rsMLg8dSpig84c0y0tB6zXsn9QLQQ7XyU0cT042hTxOKdUpGWim1l/iY5xPquX1+/vsXdv6C1gXQ5jxa4qNaRxOV8eqysf0ZrUCHZZG4w1w5iWnxWs1NxzIn5Kzh8K5+m7U7h9/Nb4xeZzXYjC06mUAS0OpkgfEGGDyldHs3DYB7QGh9Gz7ObmkOvrN4i1u9KRr/hTiSMK5sjq13gazDqbXEniJC6vZNX/AG93Wc90yJu4x5Quf2DTw+FAZSJPtHSSTpIyl5DjYe6IHHsUOFeWuILjAJsNFlcdgXW1UJoAnTzUGx673dWYaJJLr24i91ofnqI90959mb9yioGMiwB9fVPvv8yAomY0zAdA7vsrQoYBnvO606Rp56qCs2k9xgR2XVqngH6uI7dfVV8Yz2YBLLbjHqq52lyQXwWtNnA34z5Kd2NaDpPcFSwQdUkhoAG8/spaovAIPl8lFWXYymeI7YT62IAEzmHYQqc7iPHVKcID7vJQiJ+NHAjje6kpupuOpBUgwgNiE5uAbMhMEgo9qVIGj7lCqKdPH0ybOE/fFSOfPADvWRTohp96O+B6qw17RqCe8rQc/aDQTJjwnzVWrjM8gPDeHVJ81BiqgJ9wNSNrQOHrzQSU68a1XnuCk/PNHxnkFXc6U0VCNQop9XFSdOZ9IUft5Pw+JUzbxZPDTv8ARRVTLG/u3pPYjXxN1Zcwg6nknB9O4cL7oJ87qpFdtO07hbxStrgSBF/vVWKNMQCHESdOtP8AhDsFmJLTPeb+iixA51pF+6J8RqFGxzd4+auMwbTHvA+XkpMjct4njA9VUMZhzpljtsipgDN3N7MxgnlKaGA7vOPRSZDaxHDfzSkV6mGI/SO8T8ionVHD5/4WkyiXb4hIym5ptBG8SCEooOdTcJksOn6nDvtoVnU6gJLJIF7kEA91j5rddhqRuerwG7nuVmjs6m8Q8lsaGQlRzB2XL29ZrhqA7KPQfJb7cNSqUclZrRlnLIBid7XRbwK0nbMpMiXX3EkfOyrHDEEgta9uoyGPLilGNj+j9J8GgGtgQR8Xbff2qqOjlVhk1KZjQAkabpI+a2hh4mHEDcHC48UlOs4TdUQUMKTDTF7F2YBo8BqpMbgHNuyHN4jVArGbzMqzh8UQePYdEFbCAC9wRuWvh6hMXHdF+ZKp1KuYyR3RYKJ7SL7lB0bGAth1x2qlV2QJlrrE6EAws/CY1zdCI7SVs4bG5tRyRJqqzBVWjqu8LJookCXN71PiNrUxIm+lwRHNPoY5j4vG6CRqot1ltbeQTE/YWhhxv3feqsHCtJkCD2JW0oUKcBxSBqc9lkjDuKIT2fchKQkVHK4XDvJh2m+dEooz7thvG7+1dQ/DCByUBwTZEDmlVgPwpa0QOsdd8dnYnUNnON3QBx1la2LbEzGu4X7lWpVxNxbQJVUK2BM+pUmEw7jIsO08OztWwanVu0difh4iIBnVSjm6cl+UA6xNwFeo0m3DiZH83y3q7idmNPukjjqVHS2Y0RMmN+nNKKNbBbw5p7reESnVaDg24aO8CZ71r/w9gOYAT4+iSrSDrEckqsEYhzZa06mfL75JtUECSSVq4rBQQWCCND+4UeVxbMXF9YPnqlFTC1QASWSeJPyTYDvd14BK+oXHrCO4fJTYenIjl+6CsKbh+kgc0oYSeCtvwjhoSCO6P8JKbHD3hKUVzSdxRYe+In70Wlh6TTabp5wwMgjT7srUNxmHAALSIiBb5qOgxunH73qVtOOru3JvsOtJ4KUSVMI8CxlvDdyUFNhneD98lcpy3S4Kl9kHXNilFCo8aOF/i/cJpogaiR97xdX6lGLKvkIPZuVor/lRqAe7epqezpuCPH9laFI8FMJClGZUwZadLKyzBiwIstBhBT8gVZrPOy2agQpRggNPFXYRCRPTI2phHFuZgl4Fu3vXMV8c4OLXkTm4RMWnTRd6QuS6S025sjbPPWA3H6eCLm0+httwIBMm3Jb1DFtdF4JvC4KtXYMjL+0BuN+WN8cTotbDVmS5xcQRENBm2vNNV2BKYWysjB7bYQAXSdJHHu1C1aNdrgCDKiJIQneKFQoMpvs1nNx2VlhopcPjs7SYgrJNxFtOo1gmLrGbigDIbIW3jsPnY5p11B81z1KmBIOm/wCSN41aWPaW5dONtFJSxoEaws6nh5Gsdydh8sxccig2H49ptPqFWGNh1ohNGFDhqQqlXDdqDXZimnf4qB2NbMEmdxVGw6txI3KvUowYmUGu6vIsbhY1auc0kd6lczLBH33qejld7zeRhBCwNI39nYrNJ/EDvT6NKNNO3VTHDxpA7kEDqu79lK2IghQVcP2qemyQrBDVcWm3NW8O7NcTO9RCjOpVmgMpkdyJp1alvUQnQq+5kqOpTskSo6TARZSBkaJtMKYXuqIMk6pzqYBCkc1PYJF0zEpwCRzAU9ItzGVf2RBsp2FKUizFpUIQtIFgdK9hNxLBY5mHMwgw4Ebwt9IVnTNedYDadGhUNBrXvrEy5xbLidNwhZXSbH1mE+1pGmCYkBoB7cwNzC9MrYZjXGsGjPlgmBJAvErmekOFp4qmSW24HepW3nH+qMhOUGYEeYPrK2ej/TBrHCS+82GkbpH3qq2N6HMiabotMH6qLovsj2dbNm6zTaO4h0zxDuYWuDvKfTIkA+yNwDo5KqznV5/RzcPKEJB//9k=" 
				/> 
			</div>
			<div class="col-md-9 abcd">
				Born in Torquay in 1890, Agatha Christie became, and remains,<br> the best-selling novelist of all time.<br><br>
			She is best known for her 66 detective novels and 14 short<br> story collections, as well as the world’s
			longest-running play –<br> The Mousetrap. Her books have sold over a billion copies in the English language <br>and a billion in translation.
				
			</div>
		</div>
	</div>





<br><br><br>
<div class="a">
<br><br>
<i>" What can I say at seventy-five? ‘Thank God for my good life, and for all <br>the love that has been given to me."</i>
<br><br>- Agatha Christie, An Autobiography<br><br>
</div>
<div class="b1">
<br>--------&nbsp;&nbsp;&nbsp;   Christie's Life &nbsp;&nbsp;&nbsp; --------<br><br>
</div>

<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-default js-go-day">DAY MODE</button>
				<button class="btn btn-default js-go-night">NIGHT MODE</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group scrollable" id="chapterlist">
            		<li id="chapter0" class="list-group-item chapter-thumbnail"><b><i>1890 - 1916</i></b>
<h3>The Early Years</h3>

<center>
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSEhIVFRUVFxcWGBcYFRcWFxgWFRcYFxUYGBYYHiggGBolHRUXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0NDw8NDisZFRkrLSsrKzcrKys3LS0tLSstLSstKystNysrKysrLSsrKysrKysrKysrKysrKysrKysrK//AABEIAPsAyQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAQIDBQYABwj/xAA/EAABAwIFAQUFBQYGAgMAAAABAAIRAyEEBRIxQVEGEyJhcTKBkaGxQlLB0fAHFSNTYuEUFnKCkvEzwkOTsv/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFhEBAQEAAAAAAAAAAAAAAAAAABEB/9oADAMBAAIRAxEAPwDzvvj1PxSd6ep+KYklSiQ1T1PxSd4ep+KYUiVEneHqUhqHqU1JKUP7w9Sl7w9So04Ih0lK1x6ojB4PvHButjZMeIwtplfYcaS6p/EI2DD7XlfjndNVihcifCDzcgor93vdenqe3qGxfpBK9Oy7sY0hved3Yklujg/ZuT1Vw3sjhALU46XcQD5AmFB4o7CVAQ0tIJ4NvmU8Ya+kOL3zs24+PPuXp2J/Z81z9QrvI/qE/ThaXLcrbQAaWNgchohB5MOyGLe1pZQeJ3lwI9d5AVLjsBUou0vBBHr+K+jqbBFkNmWVU8QwsqsDgeCEHzdJ6pNR6r1LPv2YNMuwtSD9x+x8g7j3rB5z2cxGFg1qekGYhwdt6FBUmoeq4VD1TSEiqHiqeqU1T1Ua5A4VD1S96eqYuQStqnqpO9PVDtUkqUDpF0rkVxK5cUkqhVy6VyDlLTpkkW6KOVb9nqTnVWhjATPtETA63sFEX2Q9k61R7XEFrIBB9k34PMr0nA4OnhaVzZouSSfrdNy0aWRvG56nlU2Po1cU9wLSGMPgaTGojmR+KqtHg81p1BLTA2Gq0/FWDGtdyD71l8PjRSZ46LyG7/bjr8Fe5Zi6VVuqnBB93yQWlNsbJ4hQshKR5lBKG9E+ZVfW1/Ydf9bhE0K077jeFBK5sqnzvKKeIYab7dDAMe9XMofEUw7mCOeUHiPabsjWw5MFtRokyLOjzB3jyWUIXsPbSlUNNwcD4bh7RxyHN5C8mrNBmbGfcUAyRKRFlyIRcuXSqHNUijaVKoBkqaE5VSLki5EKuXJYRTmCbcytv2bwYa4aSRqgk+Z4b5/SVk8NQa2HOcPQTPzWw7F1A+qPuMBgH7xi6hj0fB0g1oCILBugBjB13KmGJG8qgo0wTPKRmDaDqaIPlaVAzFjqpmV5UUWK0bpzaoKFNUc8qqxDH0yTTdP9JuCERb4t4j+8IHCYptOsGEul8wXGZO8D0WbzftKKZgWP3XtOk+jhskxNZ7qVPFdwXOpvDgGk+zBk2uR7lR6FSqSkrN5VLl1dwMuMioNTSBa/AV2wgj1UAGMALSHNDjGx5Xm2bdncIS4anU3NgwTaHX3jbf0XptalKyXaykGzUv7MWi97C9kHlWb4HunwDLTdpkG3qLFV5C0edYik8EFuh4GppBseCIix8vJZ0uRNNXJEoQOapFGFJqQDJZSLiUHLlyUIOVjlmXVHy5rA4N3mwv8AVBUWEkACfp71cUMydTgEglojS2wA8+PqiocVhAxxBueOg8pROXZj3LHFu5hs8XufoqvF4t1Q3t0A2CNo5e+pRJpjVpuYkySDYDyCCcdoqsk6t+Dt7vP81d5d2mc5oY8wTz8oWOpYR7naWtJPSFd5T2drvN2lokb2QazLcU5z9MmwlWDc2NP2jwXH0RWS5OKYE3MR7kXicip1JkRIhBm63afvKRc0wWvj5SPorbLM7FUNJ3G8jcHoqbE9hqlMOFJ+oGLHexlQU8gxNEh7Qbe0J3A8kG3xGWsrDa9iD0ROXVhPdubpLduhHUKPLKoexr2njb6grsysZOx6WI8wVRYjDnY3bx5J1GrBjohMBmVMANNQHiSYJRteNxueUD6qqc5wTatNzHNDgREbbjg8Kxa+W+iieJBTR47i8GAKuHfGphlhI/iFu7YOzvMLLPYTPUbrd9tMF3dYVACS0Tz4h9oA/PyusVjaRa6Z1B1wes3IPn1UTQi5KUiB7FIomqWUAy5cuQcE+k2SAmJzHEbeiDV5X2dMhz3M5gEiD08MbIyvhaUFlRwfH2Ws7sAnbxm59PkqjsvUrkllBjTNy4iY/wBx2C0jcK+kxznvaal/YEMZ5l56eSqsXmeH0OI0aAL6eYO0+a9C7BYWMO0n7RleaYypLjDi6TJJ3J6rc5RmlTuKbKUMDWgFztz6dEG2bhKYM6Wg+gUzaY6BebZhmOLpO1NryOhhE5P2xrF0VA0+Ysfgg9HYpWPVbgMWKrA8bEJMfXe0eAeqC4FQJ7SCvPMXTrOdL8Q5oPAcQAFcZLobb/El3q8FQaujh2NJLRE3MITOQTTdFyLjzjhS0a1t5Q2YYgnwtIDj14QecVKjnh5pvkfaYSQ6mT9qR9nz4Wh7AZi9+qk6pr03iXEgHaSd1dZbkdJniNNusi7g0c735U+VZHSwz6lRljUMmbAAcDoEFtSHndNDZnhVDs8a2s1h9l48LhtI3B+IKuaV5VAOZYBtZhBF9pXkHaHJzQcWQfaIji/suHSR9F7WDB/XxVD2yyP/ABFF2ggOHiHnF4lQeJVSJ8Ii3Wb8qMqzzbD6HmQLgXaZaDF7/gq1E0rVN7lExSygDXJYXIOUlIDm54HHv8lGicDp1jXOk7hok+4INZlWdU2gMDH2EuFMANtuS4XV23EMxVF5aw02CRrPPpPHms5Qr4enTL6BfriJfAE+YFoUWMz9pody17ySPEdIAHUNA4VVncSAHuAMgEgHrHKsKmIqMY1twCAfd5IOhRmPMx8dl6Th8nbUwrRpBOkeuyhjGGq9tIVW0KZY4lupzTUdPmXG0qtaHmagEAG5AgSeAt3h31Kbe6NIxtBaHNPxU+DwNeo4S1jKY+zob77REoLLsPUL6I1CCFfYqlIICjyvBim2Ajw1UebYnL61XE92QDyGkkM0gj2o9o+QUFXtFVw9Q0auEoFrTECnBI4g+dlvsxwdTUH0w0kdR4h6FR0aWpwdUpAuGxLASPeoKehmhY4aaVWmSAXU3AuAB+64THonY51cnvKRI5g8rW0qfMbrq1ARsg80Pb7EMJa9jQR/R+bgh8z7e16rS1rQ1vO5d77wNtledqOzofJFiSNh5/NAZXklBwfTY7U/QRxu24PxBQSZDXcMMzEVDviINplpGn8F6Tg+FjntY3DsoQLuDRIB3BIK12XnwgoJMWyf10T6fE8qWswuaYMEix80Dl1Qloa4eIC89RugxPbXJKLXF1RgY2ofDUZMyBs4RHWCvMq9LSTyLwf1svojNcOH0nBwBEXBEgjleOdsMsbTfqa7wuGoECQZPXqEGVbuplE1SIkCLly5AoUuHoucfCNrk7R5yo6boIMA+twrD/E626NIEwXFrdP/AGFQL3haIk336FNfUHAgdP7pKzYMJhbaVBoMNTpGiSHFpBDjadrw1b3szmLX0xBsJHwXkbXkbFbHsDjILmHrKK9GbSBvCldDQoKdWyhxtYAeIwOVRZ4fZEBVuFzBjgIIhTjH0tWkvaHHYFwk+5RR7XJdIQrH3UwKIllNeV0pC1UZH9ouZOo0A2nZ1U6dQ3A3N1nP2b0HivqIIaWm52J/H+y0H7Q6Jdhw8NLjTOwE2OxI6Ks7IY9oaCYFg1oHEAlzj7z81Abj2661IA2Dj6gsdZbjC9FhstrMq4lnjJLXOiNpiHg+8NK3DDHvQHg2Vc21YA+cfW6PZcKB9PxB3KAgDqvK/wBoWTupvJpf+Mgv09CXGS3yvsvUgVR9qsv76nLTD6ckehF/15IPC6tAsMO9fiuhGY+l4i4nkgjz6jqDuhkAAXLlyIUKVkn80xjJMBTubHhbJny3hUDyiqFZrRDmzJ67IUpXBQOZSJmBt9Fb9lcRoreo+ir+5e1hcJANjHT8lFhquhwcOCqPYcNiRCdiwHsLTyCFm8txpLAQZsmv7QNpuPeFRQeX061CoWgy25jgei0+CymjWLazmDXbxc22WaZ2zpar0iQeZE3R9HtvQpw1tMkeRkoN2wABSsesnh+2uGePaLT0cIVvgsc192kEFUXIekfVshu8hB4rE7gG8IAaVA1cQ7x+DSWubPXaPNRvyqlRBAAsDJA6+g3JPyTOztZpe7UAHeIyN97g+a0z2Uw02EHf37qDzDJahGMLhIbr268L1WmbhYanlvdYoAHUxznaST4geh63K29FpQWFJ3CcRPuuhDVj5J9R/wBodFRKGwT6LOZ1mLqWIYyJa6Lmw6RPVXz6odsbxIWe7ZYdr2tE+MS5omCS29lBhe0mBB70ANmk+QRuabriY3AndZ7/AAnmFscJRpVqjarnCm5hh4IkVGHeenPlsif8t4X+Z8x+aDytckSoiSlTkx+oCtA8NEnctEeQ2A9bqrp3tMDlWWJoFrbA+LYcygGpsDnWBAvP5rqmXvD9ABJtt57K6yfBMY0PqmJkx/pEwn4p5o0DX/8AlrmAfut8vMqkA4fNe6boIlzSQOWkHdjhyFW451Mu1U2loO7SZ0nkA8hDroQi9yLMCBoJRmIwbKhLjusvTcQZG4V/l2KDwATBCioq2W05sSPKFYZRg6LXAkknjor3LcDTePGASrnD5RQ4pt9UHYLA0Inu236gFFU8M2n7AgdFKyg0bKOsdIVE7q8CVkO0uaENIa7S6xmeJ+ZU+e562m03k9Fhq+M7yqHPmJE9Y5QXDM80PD2W1f8AkF9+XN6StFgs574OaS4CJkRE22HuWUdlLe8lhkEt0DrqE79B+S2tHKjQokCDUI9ACSb+78FBNWrNFeketx5kEcrXOfYeq8/o4Y6m/wBGol2+zth5/ktPRxpfT1D70fCB+aC2xVXxNHX8E6nibR6/JB40ywPG7Tv5cpja7Zvufh8FRJjsQ5rA5g1FhEgb6ZkwnZ/hu/oS2Q5pD29ZG4jzQOp7XGDF52kFvl5qelmUsdqGh2trWh2xO4gqDI5cwV3VGNPduILdon3dQZEqb/AO/mH/AIhG5thwyu57G+IgvLRbVPtE+7p0VD39L7v/AOvzQeeKSiJPpf4KNTUqcgkzA5/AIifBskgi7yfCN7zcn8lb47DOp09bnF17TyY8Xu/JCZHT1O8IgjnkA7n4fVEdoqzrNJMRYdAPxVUBisTOgDZo+t3KyxWLbVoNDjGkGPVsWhUBadvcjsLggfarMaJ8yfgAiK6Lo/GYXuqbQ723+IjlreAfU/RGNxOGotPdh1Wpw5w0tB9Bc+iqK9cvcXOMkoIwnMeQZG4TZXINRk+eiwedJ68FazCZoCLOB9CvLWhEUJG0hFr1Wrm7GCXOAWXzvteDLaQnz4WVqtJ3JKgdTUqUleu551OMlPoAudFyT03UJCnoiA4zBt6wTf8AXmg9B7NUWd7RpuaHOpsLifsjVcAdTZWPabHEVGUbgVHtkj7oI298Kr7KVO6p968HSDAPuifRXmcUW1HUz9sSWngwRY+9FRvdpNQRZrSXf7nGPxUGQ4ucOI/qJ9SQfxKNPjNYEX0R9Yv8VnOyte3d8l5+AF5+KDX4HEzQOq/ic34EpKOElwc0yBuOb/8AaTC4XVSDf6iTH+pW1DD3QB4ulLQBaPispTrVKNN4JD6hqF+gnwloiQCdnXW4fRghZrtVkwLHuAuwF49TuPNAVl2MZXpF1QNa5tpkFzWn8F37sp/zm/8A1Bec5HmPc94CLPEfI7+Ssv3s7+aPj/ZBhlM0EjkgfJRhsqxB/hkiGkEbTfoI4FjdEEZJUgOb97SJ5An+3zSZ0H6iDEe6SOsITAvMmUfXo6yajnWcAA0XJgbTwEVWU2HfkD4E7FSYuiabWh1i4ao5g2EozIcJ3lQueYpU/FUPEDYepQOa4zvqrqkQCbDo0WaPgqgMrgVLQw7n+yCYTHsgwmBoT2tlIAr3KsqLhJ5UVU0qcqyw2Dm6s8HlHjcItFkZSwBYdrIKV2AUb8AtCaUmIUlbLptCDLVcJAkXA6ATJ6pcqwoLwHSA623mtTRy6AQWyD+HmhM0wLm02uBNj7XkCIEe/wCSDRV8INDKYgNAIH5EHcJKMtaGOJlrwZ+Z+gSZNUNYMB9T6Xv8lJnNXRVotiWl8O9XbfRAMMaTVrhtiG/iT8bKo7JMc55febfM7/D6qfO6nduqEDxOLWz8Sbf6Vddjsu0t1n7Z1f7fsgINXgaMAD9SjmMQuXPkuE8qzaxAHim9OQgsypF1MiLxI9YVniAhcT7J6wfoivEM1wZpvIeQHaj4eYHP1Q3vRoBq1j3h506jtJdA1HoJWh/ygP5lP5fmiMJg6IdMgnpG88eqmxDw0aQIMeKeSOnRS4AspsdUdOo+FkDnkym5VgHV6gmdIu49ANwPNVBLsDopMEHW/wARi508BWFHI6jwHVSKVMCCT9lo6DklWmDwbnVi8SGsaI/AD5I7EZc6oQ6o4ujibFRWXzIg0+7pNLKAPPtVT95yzznSdvct3nmEIou0tlx8IA87WVVguyTo113Cm2Jjn39EFOMRUDLugDYC303QbKZcbXP4lWePdQHgoNLj993/AKjhW/ZXKS4a3D7XPkhCZH2XcYc/4LYYfKA0AKwwtKAjGMQVzMvA4SuwY6K1DE5tJBT0csGrVCNbgB0CsWsTw1BTV8IqHOqX8MgWvJ9NjblbV9MHdVWbYYaTAHqePcgouzT9LjJs6OI4sAPfKsMzo/xmlwlroLT917T+IKp6UsdHI+0bEk7Dyn6BJkmbuqHun3uI6zq+n5IA81o6sQ5sxcu6m/hn4fVb7AYYU6YHAH4LO5LgDUxNWo4QJho5gTc+S0mcO00nAcDjf3efCAPA44Ne48+z6wC73crQ4XFNe0OaZBE/Fef5bhq5qsa5ot4yY3mefQrTdm8HVp0z3kjy6fFBb1qnXZcdpHSyiqtkX9ULluMLhBEQYg/LbghBh88od6XspOAElz2NGzr7kck+5VH7qxH3H/8ANq13a3LxswlhcZEGJne/PWFkf3XiPvu/XvQVWIwIqEOAin7DGD23kdBxfkrTZHl7mjQYHUDjyHX1S4DLadGXai95t00jpZXNEOcPB4SeY2VDqgYxsOIaJuT0CGZnVOo7RRGsjnj+6Hx/Zzvqg72s4ifYb09VdYPA0sO2KbAPQX95QQPpvjgLFdqWPc7xOcR0m3wWzxmMc4aaYBPlePUoTKuzgL+8rnW4GQ3gevVTQN2N7NtZTNSq0Fz9pGzfwJWjbgw0wAAEeGWTtEoBqbFMAnsYnNYgWmFOGpjQpmhA3SlDU6EoCKjeFW4ygXcK10JlRtkRh8yZpMkAwVHkOWxV7xx1WmQ2PTpdX2e0ToOkSeBfr5KbJcEabBPtHjge5AZlWDFKmXQZdLjO9+qPbRLosOJlOpNgXuVO16DqOHAud1M4cBRvqR6qeixAyrhgbxeN1nCxzK0EWPO3Oy1oVVneCLgHt9pl/UcoM/Vr9+yHtBh7qTgBs4eySeJCq/8AL1P+VU/5Kxw1MNxFSncNrN1hwmA4EI/91u/q+IQDHANDTpaBYoTBPY2nrJgfoK9NO0LD5rjDSeaNEGo8WDYlrPWLlxnZBbOxIJ1Hc8cx6JBTbW9sGB9nUQPeBuq7KOzVQkVaziHTqjz2AiSr9uF0ncKhWYdrQNIAHQBEsSBqdTsgkDVK1RqQIpwal0rmhOCBQFIE1oTgoHQuCRdKqOASOC6VxKgDq0JPoiKICAxGMDTBMWk+Q81DRzVrxIMN6nn0RVrWrjqnYatMu4Fh6rNNx5qPdFmNi/WZWhwjPC1o2i6IKomTJ/RVhTKCosujWhBIEsJgTwiqbM8shpfTALhJEjbmAqf98Vv5fyP5LZhL3Y6D4IM2WkSd/wAFT4fLmU3OqBvicS4k8Sr8tQ9elIKDH9p83qt/h0zptJIu4n7renqs3h6Re1z2V394JMOcbjpB2K3eZ5N3rmvEW3BHH5qvwvY9hqmrUFvug2nqiBuzOauqFrHkmBueq1oao6OXU2RoYGx0ACJDUU2E8BOa1ODbKoRoSgJwCc1v/SikanQkATwFUJCSE8hJCgZCRwUgakcLIML2yeRDWzLyZ4EN6nosw2vUxH8Jrw1gu4zBPu4AV3+0KxBvGnYWm/J6LE5aXPeGzDRchtp8vOUHpeBaCwFkEw0WPOx9fVa+i2AspgqGhghkWBA6CVrqPsyiiaSIaoaIspwEQ4J4KSErQintT01qcqij0pO7RWldCgFFNJ3aKhcQgE7pdoRmlMIRQxYu0ootCaG2RELWpxCfCUBFRBqeGp7ApA1BDpXBqnITUEehNcxTgJrkGT7V5L34I502+KyGS5KAdYvDg0kGQRO+1iOQV6tXaslgqYFeqAIGoWHmLoLWjht7dFaYWwAOyHYIJH9IReAEiDdAfTapQxA4dxDiAbfH6qxCDg1KGqSE8BBG0J+lOhKg/9k=" />

Agatha Mary Clarissa Miller was born on 15 September 1890 in Torquay,
Devon, South West England into a comfortably well off middle class 
family. What made her upbringing unusual, even for its time, was that she
was home schooled largely by her father, an American. Her mother, Clara,
who was an excellent storyteller, did not want her to learn to read until 
she was eight but Agatha, bored and as the only child at home (she was a 
much loved “afterthought” with two older siblings) taught herself to read 
by the age of five.
Where did her creativity come from? She absorbed the children’s stories of the time - Edith 
Nesbit (The Story of the Treasure Seekers, The Railway Children) and Louisa M Alcott (Little
Women) but also poetry and startling thrillers from America. Agatha invented imaginary friends,
played with her animals, attended dance classes and began writing poems when she was still a 
child.

When she was five, the family spent some time in France having rented out the family home of 
Ashfield to economise, and it was here with her “governess” Marie, that Agatha learnt her
idiomatic but erratically spelt French. At the age of eleven there was a shock. Her father, not well 
since the advent of financial difficulties, died after a series of heart attacks. Clara was distraught
and Agatha became her mother’s closest companion. There were more money worries and talk
of selling Ashfield. But Clara and Agatha found a way forward and from the age of 15 Agatha 
boarded at a succession of pensions and took piano and singing lessons. She could have been a
professional pianist but for her excruciating shyness in front of those she did not know.

By the age of 18 she was amusing herself with writing short stories – some of which were
published in much revised form in the 1930s - with family friend and author Eden Philpotts 
offering shrewd and constructive advice. “The artist is only the glass through which we see 
nature, and the clearer and more absolutely pure that glass, so much the more perfect picture
we can see through it. Never intrude yourself.”

Clara’s health and the need for economies dictated their next move. In 1910 they set off for Cairo
and a three month “season” at the Gezirah Palace Hotel. There were evening dresses and parties 
and young Agatha showed more interest in these than the local archaeological sites. The friends
and young couples she met in Cairo invited her to house parties back home on her return.
Various marriage proposals followed.

It was in 1912 that Agatha met Archie Christie, a qualified aviator who had applied to join the 
Royal Flying Corps. Their courtship was a whirlwind affair; both were desperate to marry but with
no money. According to her autobiography, it was the “excitement of the stranger” that attracted 
them both. They married on Christmas Eve 1914 after both had experienced war – Archie in 
France and Agatha on the Home Front now working with the Voluntary Aid Detachment in a Red
Cross Hospital in Torquay. They spent their honeymoon night in The Grand Hotel, Torquay and
on the 27th December Archie returned to France. They met infrequently during the War Years 
and it wasn’t until January 1918 when Archie was posted to the War Office in London that Agatha
felt her married life truly began.
</center>

					</li>
            		<li id="chapter1" class="list-group-item chapter-thumbnail"><b><i>1916 - 1924</i></b>
<h3>Poirot is Born</h3>

<center>
<img src="https://upload.wikimedia.org/wikipedia/en/5/52/PoirotInvestigates.png" style="width:50%" />

It was during the First World War that Agatha turned to writing detective
stories. Her debut novel The Mysterious Affair at Styles took some time to 
finish and even longer to find a publisher. She started writing partly in
response to a bet from her sister Madge that she couldn’t write a good 
detective story and partly to relieve the monotony of the dispensing work 
which she was now doing. (When the Hospital opened a dispensary, she 
accepted an offer to work there and completed the examination of the
Society of Apothecaries.) She first worked out her plot and then “found”
her characters on a tram in Torquay. She finished the manuscript during 
her two week holiday which she spent at the Moorland Hotel at Haytor on 
Dartmoor. Her new found expertise in poisons was also put to good use. 
The murderer’s use of poison was so well described that when the book 
was eventually published Agatha received an unprecedented honour for 
a writer of fiction - a review in the Pharmaceutical Journal. 
1919 was a momentous year for Agatha. With the end of the war, Archie had found a job in the
City and they had just enough money to rent and furnish a flat in London. Later that year, on the
5th August, Agatha gave birth to their only daughter, Rosalind. It was also the year that a 
publisher, John Lane of The Bodley Head, and the fourth to have received the manuscript,
accepted The Mysterious Affair at Styles for publication and contracted Agatha to produce five 
more books. John Lane insisted on a couple of changes to her manuscript including a reworked
final chapter – instead of a courtroom climax, Lane proposed the now familiar denouement in the library.

So where did the inspiration for Hercule Poirot come from? During the First World War there 
were Belgian refugees in most parts of the English countryside, Torquay being no exception.
Although he was not based on any particular person, Agatha thought that a Belgian refugee, a 
former great Belgian policeman, would make an excellent detective for The Mysterious Affair at
Styles. Hercule Poirot was born.

Following the war Agatha continued to write – experimenting with different types of thriller and
murder mystery stories, creating first Tommy and Tuppence and then Miss Marple in quick 
succession. In 1922, leaving Rosalind with her nurse and her mother, she and Archie travelled 
across the then British Empire, promoting The Empire Exhibition of 1924. She continued to write:
Agatha received the joyous news of good reviews for The Secret Adversary while in Cape Town 
(where she also became the first British woman to surf standing up) and Archie’s boss proved 
the inspiration for Sir Eustace Pedlar in The Man in the Brown Suit, also set in Africa. By this time
Christie had already decided to change publishers. Fed up with what she saw as the unfair 
terms offered by The Bodley Head, she sought out an agent, Edmund Cork, of Hughes Massie 
and he found her a new publisher - William Collins and Sons (now HarperCollins). 
					
</center>					
            		</li>
            		<li id="chapter2" class="list-group-item chapter-thumbnail"><b><i>1925 - 1928</i></b>
<h3>A Difficult Start</h3>

<center>
<img src="data:image/jpeg;base64,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" />

Once returned from the Grand Tour, the family were reunited and settled
in a house they named Styles in the suburbs outside London. It was a
difficult time for Agatha – her mother had died and she was often alone
clearing out the family home in Torquay and struggling to write the next 
novel for Collins. Archie and Agatha’s relationship, strained by the 
sadness in her life, broke down when Archie fell in love with a fellow 
golfer and friend of the family, Nancy Neale. Archie was a keen golfer;
Agatha not. 

One night in early December, overwhelmed and with close friend and secretary Carlo away for
the night, Agatha left Rosalind and the house to the care of the maids without saying where she
was going. Her car was found abandoned the next morning several miles away. A nationwide 
search ensued. The press and public enjoyed various speculations as to what might have 
happened and why but no one knew for sure. It eventually transpired that Agatha had somehow
travelled to Kings Cross station where she took the train to Harrogate and checked into the
Harrogate Spa Hotel under the name of Theresa Neale, previously of South Africa. Having been
recognised by the hotel staff, who alerted the police, she did not recognise Archie when he 
came to meet her. Possibly concussed but certainly suffering from amnesia, Agatha had no 
recollection of who she was. An intensely private person, made even more so by the hue and
cry of the press, Agatha never spoke of this time with friends or family.

Agatha and Archie remained apart; Agatha living with Rosalind and Carlo in London and 
following a course of psychiatric treatment in Harley Street. Needing an income and unable to 
write new material, her brother-in-law Campbell Christie suggested she combine Poirot short
stories composed for The Sketch magazine thus creating The Big Four. Finally accepting that
her marriage was over, divorce from Archie was granted in 1928. Agatha and Rosalind 
immediately escaped England to the Canary Islands where Agatha painfully finished The 
Mystery of The Blue Train, the book she had struggled with as she mourned her mother. Late in
1928 Agatha wrote her first Mary Westmacott novel, Giant’s Bread, not a detective novel but a
work of fiction about a composer forced to work for financial reasons. 
</center>
					
					</li>
            		<li id="chapter3" class="list-group-item chapter-thumbnail"><b><i>1929 - 1938</i></b>
<h3>A New Start</h3>

<center>
<img src="data:image/jpeg;base64,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" />

One of Agatha’s lifelong ambitions had been to travel on the Orient 
Express and her first journey took place in the autumn of 1928. Persuaded 
by a chance dinner party conversation, Agatha set off for Baghdad and 
from there travelled to the archaeological site at Ur where she became
friends with the Woolleys who ran the dig. Invited back the following year
she met the twenty-five year old archaeologist-in-training Max Mallowan
who was to become her second husband. Asked by Katherine Woolley to 
show Agatha the sites, each found the other's company relaxing. Their
relationship was forged by travel – Max could “rough it” and so could
Agatha. Max proposed on the last evening of his visit to Agatha's family
home of Ashfield, they were married on September 11th 1930 at St
Cuthbert's Church in Edinburgh, and Agatha only slightly reduced her age
in her new passport acquired for the honeymoon. Max returned to the
Woolley’s dig – for the last time alone – and Agatha to London and
writing. Thus began a productive and recurring annual writing and 
travelling routine for Agatha and Max: summers at Ashfield with Rosalind,
Christmas with her sister’s family at Abney Hall, late autumn and spring 
on digs and the rest of the year in London and their country house in 
Winterbrook, on the edge of Wallingford, Oxfordshire.
		
As a rule Agatha wrote two or three books a year and when with Max often wrote a chapter or 
two during quiet mornings and helped out on site in the afternoons. The atmosphere of the 
Middle East was not lost on Agatha, as can be seen in books such as Murder on the Orient 
Express, Death on the Nile, Murder in Mesopotamia, Appointment With Death and They Came
to Baghdad as well as many short stories written within this period. 
</center>
					</li>
            		<li id="chapter4" class="list-group-item chapter-thumbnail"><b><i>1939 - 1945</i></b>
<h3>The War Years</h3>

<center>
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSExMWFhUVGBUXGBgXFxcYFRcVGBUWFhUVGBUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGisdHSUtLSstLS0tLS0tKy0tLSstLS0tLS0tLSstKy0tKy0tKysrLSstLS0tLS0rNzcrKysrK//AABEIARAAuQMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAACAQMEBQYAB//EADkQAAEDAgQEBQMDAwMEAwAAAAEAAhEDIQQFEjFBUWFxEyKBkaEGsfAywdFCUvEjYuEUFXLCFkNT/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAIhEAAwEAAwEAAwADAQAAAAAAAAECERIhMQMiQVEEEzJh/9oADAMBAAIRAxEAPwCyOXsbTJaB5oDhwkD4UbQOQsPZOvqHwwOpUarVDZJNoXHV1Waz0vj8ZhPz0NrB9kzXxtJlnOhUuMx76h0tBDTwFie5Sf8AbKrhMAeyaj+lVSf/ACi5oYqnUMNcCVINNZWlQfTqixBmdoneVrWSQEqnPGVH5LtAuopttAFSyxCKSjSlKI4oDklNJSQ1dpRrHxkhOoJG0un+VO0oXhHZSlEAU+iVzYuVMDELme/36IK4L+EYCPwFKdrwnSL3SaOKQcURiD+BJqI5eyqs7zA6g0EgNMEjiVbOa7SDtYSqpNImXNPMB1TwQkGRYSlZZEQCl2av5obLTNhzRBh5Iw8LmOBt+6OyOEivbqboIibTxjj+y7/4v/uT4ZDfQ91f+B3Vz/kfSFk0zi+/+H8bralFDVfDR6rP51idVTSDZsdjaVdZkSKc9wqXE0h4waCDsTG12px5o6bfX9LbKMKGjUd3fCsE2wQB2RgwFLes6lPFFfjse1jgNOrmeSs6JkA3usljK2t572WxoU4a3sFVziRjF62PU2LtEomclV/UOMLAKbY1O3PGOilLR1eFiGfguh0LLYeo+nVbcyXbSduq1mKrNpt1O4fJVOMFP03sAsQlsrPvzitUdNMQ0GDAlWuW43WNLyA8TbYn0Sc4Ofqm8JOm5VTnmZeAGgCSfgKzxdJ5bDHaTzWOzzB6KrGFxcSBPqURKb7H9fo0ujQ081plgcTc3gcFGq50NmtJi6nUsnptAHv1TOZmnQplwAnYDqn+O9ByrNZkhVNSrAFtUkblXbauIeBAgW4R91A+nqc1w+YJufz391e4zNmMtv24Kr/iMvmv22QK+ErniPdK3L6uxI/OSt6VUPAcDY7JKrgPMTAG5Uazp4zmsgNwDouR8qRhMEWnUSPbgo9TN2cASpeExLXg6SeFjvdDTwhcd6ZKcLRK1iyG1+y2MLLUOtMVWHiN0dSs/mDyyrJEX2+y0I5dVGzLANqEGfMIE8FtFJemTjcaOwubMgFwdPK3xdRMxzfUNLBvaDuf4QtyKoP6gf2Vjl2TNYQ53mKeSuxt/R9Mo6+GNPSXSJAPtuAtthHBzGuFwQFDzLLhWaBsR+k+1uyqaOXYphIYXATsDb5VPKM8cdGtAAEnhv8AzKyP1TiGve3wySW2LhtPQ+u6kjKsTVP+o8ht9zb2Cs25BT8MsJlxAE8jwgckliIpuiB9OYAPLqzjJBjfpbgof1Ni9VYMmze4uYkk97JcvxDsNVDH7CzuWmd/RWv1BlHjBr2EagBvs4RY90372Jf8jlJ9KhTbcBsb2lx/lZjAYvVi9b/LJJ7WgAqywP044kGsYA/pBmT+yXOcgLnaqcQQBExEfdLrzS26edD+Y55Tpg6Tqdwi4nusrjHvJFZ4PmPLcDktFl/04xt6pDjuANh3PFWOZYNtVmg2G4jgUKlPhVTd9sjHOaPhip4giNpGrtCoaFV2Nrav/qZeCLT0PFSWfSrZBdUMDkL+5V2yg1jNDBpbFgOZ3PdLUvCsqvejH0y7xXBkgklrQB1g3VjVyJzaZJdLgDMDf1nfqp+S5V4TnPfvcN47mSVaVEVX8HHz3dMp9PZnoJpvMNOxNoPFFm2OFR0Nd5RwPEzCeq/TkvJD9IN9p7rq2RDSNBuN54qtknj9Mz9D+FwdJrZceEkkqPhsWA8BkQTFzv3PJN08lfPmdZS62TNJEGCPzZL8Qyv0sLFzwBcj8PBbPUOY+f4XntLK2gyXF0cDsvRJ6rGktNeVftGLqmNkUbHoF1QbJjM8SKYtyEBErRz0iY6u0CXEAdVXYrO2+UMcf1XIH9I3VVhsNUxDrnyg3J27BSMzyoUmNc0kgG/bgtlK8ZjX0ql14aPCZxRedLXXO0qzCwL6dMta9r9LhwgyDG8rY5XVLqLHOBnSP8+qKnPCVbr0sGO7qPTzFheaZ8rhaDFx0Wc+osxeKhY1zgG6djHmi/opn/QjE02VCSypaXDjHNLiTvfQH1dUpw0iNYkQP7TzV1lU+DTkQdI336fCqcBkVNrpeS88J2V253JFZmDlPdFemiiLk28yoNkN1DeE24JH12g6dQ1HhInkicUYXqGixNuaU+Sm6jkgG3FA590bkzUQUhHvTevgm6hiUAqWmUytRJN/8oDvF0Lb3Rl0HdGE6gtEra+GsV4gjfb8utrP5IUszqkYpz5VFmzy6oALxZXhKoalqxn+5afNE2/xSL3Bs0tDRb+ealOaHt0uuDwUZjk6yop/ZpizBqnkdKRvANhKvKew5CB6KFTNpTWY5l4TLfqNgDw6qu2RSUmdxh8TEOG8vd63gfC1VBpaA3gBELK5OSa7SeM9u61TsSxh8zgOU7qr0y+a9bCdUKOjV4JKpkTw4KBicToaXclma5nZaFyiZm4ii8tkGOH3UDDZ0DSNV8CDEcCY4KbhsVrYHREiYPynjQLvwyfh09Ln6jrH6WwZLec8+K02Vtd4LS7f5Vfgzh6lV0MOoGQZOgn/AMVcvqdVVv8AQvnL9YQbZM1BxVfmectpjSwy7j07pnBZyKh0uAa7gOBU8Wac53CweRE+6z2HzEuquJMNM+g4eqfzinWOo62tYAePDlsq7I8I2oXFwNouDxjirmVmsyunySQeb47UYaSW8YndRadUtcNEum0H7q6rZZSDSSCALzN+qayVtK5YDI4neP2T5LBcKddvBql4rrQU7/2+qfjcqyNUNvMBQjmZuQyR3STbCplesRmBcDe/rbdegQP7flZDBkPaH3g/hW01fkLOm9E0jGHgqXOaZa7WNjv3V1MbpmvTDmlp2RDNnHKSNgcc1w0kwev3U0OA3KzmMwT6d41DmNxH2TFKq51gHX7rVSmY/wC1z00abGZw1gho1EclUYem/EP80lv9R/8AVLhcucf1GB8q7wtNrAAAh5PgJVfb8M9Rrmk86f6SQOJ3iPsrNuV1KgLi6DEwRc9J4KLhMGXVyIIAdqM7FaQOiyKrPBRDe6VX05izBpvMRsCVEzzG6yaTNh+o8FFzPCPFWGMJBO/ypxy0UsO87vI4dTP7p9J6H5NcSBgMG+tLZhrZItYuiwU2jUxDQaYadjuLCeu0KR9N03NpEOmdR3twVm98dlN1rNI+XWmf+n6wFUgm8Rtb3U/OczFJsNMvNrcFVYnBvbUdpBM/pjr24qbgcrA8z7uk/PNDz0Ucs4iZNhgCajyNTrgGNjxjqq7OtLaw8PcQbcCVKzrC1NfiMk2vBuq2jlVd7rDSDNyNiqTXpF74kTs9xoc3Q29pJ4bJPpyrDXt6jhFoU3AZSykDPmJsfa8KqqYCrTf5JjgR9kvxawbVzSpos83xIbTLeLvfqo/08bPPX1QYbLHvvUJHe5/B+6SjhK9J50gunjwhCSzArly5NEvOZ0COajsI0hrBqe4+3TqpIy6vWu4xPp8BDSwtWi6WMkjiADIHBNdIi9b0usFhtFMNdAN57k7LYQ1YCnQxFeC7yix5XWz1Hl91jS7DkZR/BNPP3Tj32TLkkjsh9BwjaRGyYaiHdUugeDjiVzXwgJO3H9lzj7oESfF9ErKiilwkCblHrMpiQ+50XlC58JudkIqX2UlDzaiRxnso5ceF0oqfhRhQ5qhEKijueiYgA3VETX802SUjUi8Cc66UNvxSGmnG8kYIWITwPsm4VPjsU6q7w2nyzEASSR1GycrTO2kXYxrJjVeYngp9NZwZK8i/+P8ACcwWJfh3tbUksMjqL2d/xyVuf4c7+j/aNOAra6rWMhTY7rGmZmLqJHNR4lvsmnkq0dU+HdEhSNKccPlMbE1HZKDzXC3VCExD2pNl0z6pRey4s4JiBYlcUNNpSv4RySY0CCuDiuaiaFLLSBhOuYhY2VIaxA8BbTPBd4akQk0oG2NkLtN06Sk0pmbYDxY9j/KqPprQHGSJ3HVXrGKOMjpufquLzAVS8MrbbTRbtbIVP9UPDWsA/VJPoW6Z+QrTG4ptJut22wA3J4BZzBYZ+LreI8+Rsz2/tA5Ilfsxut6NRljyaVMnctEq6kqpHIDkp+s8ljXpKRkquwUd4UmqeCjVFaO6fAWtTs802wIymIUn5SuukaUfBUSwGhOOElDyRJDBjimyLp4IQLpDSFpU90Xhpym1PBiRYyxqOEUQlaJQJsbq1g0FxMAKNQzKm8wDy3sZPRQfqur5AwTz9trqgo6gAZsN7QJ3IHv+60mNRzX9+NYbgtRsbzUbKcWKjY4i3cKwazopzCuaaBa3kE6yyQOiyEP9EEaU/wBUvPkvaHW5m3srLJKg8BhAA4GP7tr+yTG4dtVhaZF7HkeaHLsG3DtMuu7eTaQTBCpvVhGY9LHxVZyqQ12kbgjoruAsKL4pmXxIv7fZRKje6lYl5m6i1TyVo6Z8BBHNJqQlHoTEGEsc0LQUVQcEaGBdkrUy0lPsCYktDY1RcRjmMMbxvHD+VPFO0His3m2Ccx0yTyM37RzVSk2Z/SqlajTUSHAEGxR6oCzf0/mWl+l1mm3Ywf4+VpqzfKSP7T22U1OFz9OSMniM0q6neY6ZEbdbfFv2V3lGYNq+W4eOHPbY+oWbo0C5zg0AySADO9uHpKGsKlN+lwi+92/I4cVo5TORfSky2+pmeaDwDb95m6dybANfhyyNiI4weF+O3yq3GYjxR5t9IEzfynlw3V99IiKRbOzrA7iwt7yVT6RPJOjO4fEvw1XzAwJ4wN+q3dKqHtDmkQ4TZUP1PlWtutskjlvI+/FV2QZmaZ0vdA2uCPw3Sa3sE3L7NY5A3mm6mNpxq1j3H2VfWzljTa/Ph7KMZs2i0Dln/qfEO10wf0wfefurmlW1AOHFM4imHWcAe4STxj48kUmSsPiSCdIHuZXoek/gWUw9FoNhEnh3W58NZ3WsFHExGLbJnmoL28Ap2JGyiO5po6Zf4jJmU4wJGoo2QAYKeLCmWBSmN5IGA2jeFJp04R06aNzYQJtITSm6+GFRuk7H7pxsp+m1PwimmsMNjsE6m50EjafTiPZaH6exviNLLFzRYcxHVWOZ5f4jLfqG38LGOLqFQuA0uaRYmLcgVsvyRyN8HqJGEeW1yCSBqF7yb8eq1mZ5bTrs0vaBaxgTt9ljMS7zmoJHmBAPLcH5W6oVpa08wPjdFrMFD3UYPMMM6i4tLQNMBpO0Re/Gd7q1+l6+l+m8OE22sFcZ1hW1qcbOEx16LGZfiDTqxB1BxsSRYf5Caeojjxo3b6g24LO5pkoN6RMG5b1KuHVePAjgm31TCzVYdDjkZN+EridLCJM/yTO2yl5blVWQ6qdutzx9FemoShBPdPmL/Sl2x+m4AQBb890QdPZBCNpUPs1lik7ei1EFZjj7fda7Ss2Kn2Y6s7ZRajJ2UuqFG07lUjee0NsppxjZFlEzg/6dpkmLdlXZVjNDodtYdehVqNRnX0U1hoWsKk0WoWxvzToUFsehK4gCSYH2UHG4s04DQC5xsPzumszpv8r3NBY2C5k/1T88vZUkZVZ2aY8FobScC5xDewPJW2Ho6A1gmw+ePzKjYzK2PALQGOEEOAFuMWUsHb/KrEY6x0Ko+o8uFRhqDcC/UeqtQhe4oTwGuSw851FstIN7A8itbkuJ1UwOgv1Fj+yo8/wWh5iwdJaRw5g+qk/TeKs5h4QR343/AGWlvUZQsrC+LlTZzlWs+I3c2IG5gWurUoCbFZKsOpxozRZpY1vIQkclcgcbo0pLAiAua66BxSN6lAMeLt5XTymEISxdAiTRgxeL8lqNTf8A9PgrKNK1PhN6rKvSKMvjDpsegTUKkzzHufU5CxHfn8qwynGip5XHzRbqteDS0uPqvBjOgIZa07/8Kmq09zb79eHdX+fUzoB5FQMqwQrNcAYcL9ZhaR4Y/Xui0yDGB7fDP6h9rK4a1ZOg403Az5gZcBY2t+BbLB1RUaHD178lFT+ypvrCLisGXFjmwHMMidjzCM4epUIFRoYwGSA7UXO4DoFPiEpCES+2I4XTYRlI6AlpSQJcgckNRNPqd0mWpIOcYXxWQNwbX4KmyzBvpvOpsRHLebn/AIV/UemdSOXWB/rTenOQgpdSSoEI0GXuQuKccOiakTt8JiFcEpaiptRRCNASlKUH8/54LpQEXlAmO09x3H3Wy8PoVjKRJIWj0H+4rKvSa9MpnWWh4DgPNAntFlnaNU03C0EHfkt1WMkdA0fCps2yzUNY3G4jdbxX6Zlc9agMZim1aBixkW490X0pMnsqbCVNOpruR99grPIHaau83Itt87q+PRnz16yy+ocrlviNGw8w/cdVAyTHeC6CXFh36LWGyzub5cR52iQdxBt2jYJS96Cv6jQsqAiWmQu6rG4PMH0z5D6Ez/wVNOfPIAs2SJPrvCTgc2jSvemHuQtqW3lMvqXWbOlLo6o/kU2Sgc5NF5QignQmybpWuQSngaK0yU49NjmlIRgtOcEAZGy5oTdfGMadMy7k25+EYGj7UsqF/wBaZjRfkXNm29psnG41ojUNM7TEe4shoXJDzmpGnhdE4IWpDCp/qHp91sp6fKxzNx6fda/V/t+VnXpFGfI29E6xqY1bJ5j4Wov0Z3Psu0HWNj9+RTGAcBUabXvbcLT4loe0tOxWRqN0Pg8CtZeo5rXem2dUkIC8KJQqamNPRK96g1S6IWMy28stxjgmsLlxDg5/D5Vj4ibLk+TGoWjznpkuQ6khU4a6K4JtOwgcgNG1wN1yTdAgyV2pI0LigNIeLqn9Ldzf/wAQNygo0dVmeVtjq4u7qRRA1u6AD905VrCCGkA3tIiVX/hHpF8IXcG2uJJieYEJDTkSyIAjSRMKNWqgU4bIJ4SdwIPTiiyXEC7Sbk7dITwjl+WEjBVROngZi92kcOymBiYdRDdJAA8w+ymKGaS2jmU7juFrIWWYbjuFqdKyr0KZmS7bsi1WSPCUK9K49HAqizil5+purwqPWw7Xb7qprCH89Q3ldSaY33Ul26bo0w0Bo4IyUOi1GIFcUjpCLSlo+IMRxS9Um6R26NDDtSFxSEpCEaPAQnUDOqUJiwUushmyUoUgwiayKjgLFwBE8xwUf/pg8EQG1Z9+ilZjhy9oLf1NuP4UJuMa4/6kseLTwPL1VpmTXeMiVWuDdEy4EiBcesK3p4dlIB15j1nsE2KUCW1GcSTYHhx90GJrs1Egl7js28Jtkykh6gS6o0E/7o4RzVi8QouBoFsucZe6CenIBS3iVnTNZWCUXXE9PutbqHNZKi2XAdvutj4Q5LKn2KvTLVBEINSfxmmBpdPX1URpTNl2hxxQg2S6UJFkxigJV1MwldBKBABs3RFqJxCT1TFozCUslK6AlaRa+yB6AWWS6ICdaAufCAGCwcZXRZHAXQjQIVeq8EANaZ280X9kNPEt0+ZzQb7EgW7qa6JQmm0i4HsE9JaZGbXaRuD6prFUqbv16Z4E/spFSi3kEy/BMLgSNtk9FjfpGpZVRkjUZFz5uCn4bD0mAaAJ5zJ90raDJ/SJiPRO+CwNDQBAQ6EpS/R3ig7GYTjBO9kw+i2QYiFIY4KWMewzPOPRbKAslhaWr0I+61moc1nRnT7P/9k=" />

World War II saw Max get a wartime job in Cairo - using his languages to 
assist the war effort while Agatha remained in England, writing and also
volunteering at the Dispensary at University College Hospital in London. 
		
N or M? was her own patriotic gesture to the war effort and she was disconcerted to see its
publication delayed in the US until after the Americans had joined the Allies.

Rosalind, having married Hubert Prichard, gave birth to Mathew on 21st September 1943. Max
was in Cairo but Agatha was a doting grandmother and often went to help look after the baby.

Agatha was focused and prolific during this period. Missing Max and with external entertainment
more limited in wartime, she wrote and/or published such classics as And Then There Were
None, Evil Under the Sun, The Body in the Library, Five Little Pigs and The Moving Finger.

</center>
					</li>
            		<li id="chapter4" class="list-group-item chapter-thumbnail"><b><i>1946 - 1976</i></b>
<h3>The Later Years</h3>

<center>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQaX8tqTNGTJRmObItlo7PfM4bGL6ozDGvvPdBAJC7IsGj8VQog&usqp=CAU" />
			
By 1945 and the return of Max with the end of the war, Agatha had 
realised the tax implications of writing so much. She became less prolific
and now in her mid 50s enjoyed a slower pace of life; like the rest of the
country the last years of the 40s were full of shortages – a long, chilly,
depressing haul. Food rationing did not end until 1954. 
At the end of 1946, Agatha’s cover as Mary Westmacott was blown by an American reviewer of
Absent in the Spring. She was disappointed as she had enjoyed the freedom to write without 
the pressure of being Agatha Christie.

The 1940s and 50s saw much time-consuming work with theatrical productions which also 
limited the time Agatha could devote to writing.

Agatha's last public appearance was at the opening night of the 1974 film version of Murder on
the Orient Express starring Albert Finney as Hercule Poirot. Her verdict: a good adaptation with 
the minor point that Poirot's moustaches weren't luxurious enough.

After a hugely successful career and a very happy life Agatha died peacefully on 12 January
1976. She is buried in the churchyard of St Mary's, Cholsey, near Wallingford. 

</center>
					</li>
          		</ul>
          	</div>
			
			<div class="col-md-9">
				<div class="well" id="mainViewer" >
				</div>
			</div>

		</div>

	</div>
<br><br>

<!--Cards-->

<div class="w3-row-padding w3-section w3-center">

  <div class="w3-third w3-amber w3-hover-lime">
    <div class="w3-card-4 abcde">
	<center>
      <img src="ap2.png" style="width:80%">
      <div class="w3-container w3-myfont">
        <h3 style="text-align:center"><b>Christie's favourite Christie</b></h3>
           <p>Read more about the Queen of<br> Crime and discover which stories<br> were her favourites. </p>
          <p><a href="http://localhost/package/login/christie.php"><button class="w3-button w3-red w3-block w3-text-white w3-hover-aqua w3-round-xlarge"><b>Read More</b></button></a></p>
      </div>
	 </center>
    </div>
  </div>

  <div class="w3-third w3-amber w3-hover-lime">
    <div class="w3-card-4 abcde">
	<center>
      <img src="ap3.png" style="width:80%">
      <div class="w3-container w3-myfont">
        <h3 style="text-align:center"><b>How Christie wrote</b> </h3>
			<p>Overheard conversations, notebooks <br>and Dictaphones: read the secrets of<br> Agatha Christie’s writing career.<br></p>
          <p><a href="http://localhost/package/login/wrote.php"><button class="w3-button w3-red w3-block w3-text-white w3-hover-aqua w3-round-xlarge"><b>Read More</b></button></a></p>
      </div>
	 </center>
    </div>
  </div>
  
  <div class="w3-third w3-amber w3-hover-lime">
    <div class="w3-card-4 abcde">
	<center>
      <img src="ap4.png" style="width:80%">
      <div class="w3-container w3-myfont">
        <h3 style="text-align:center"><b>Christie's Greenway </b></h3><br>
			<p>Find out more about Christie's<br> summer home, once referred to as <br>"the loveliest place in the world".</p>
          <p><a href="http://localhost/package/login/green.php"><button class="w3-button w3-red w3-block w3-text-white w3-hover-aqua w3-round-xlarge"><b>Read More</b></button></a></p>
      </div>
	 </center>
    </div>
  </div>

</div>

<br><br>

<!--Slideshow-->

<div class="w3-content w3-display-container w3-center">

<div class="w3-display-container w3-black mySlides">
  <img src="ap5.jpg" style="width:40%">
  <div class="w3-display-bottom w3-large w3-container w3-padding-16 w3-red">
    Amazon’s ‘The Pale Horse’ is a horrific take on Agatha Christie, in a good way...<br>-Sarah Phelps
  </div>
</div>

<div class="w3-display-container w3-black mySlides">
  <img src="ap6.jpg" style="width:40%">
  <div class="w3-display-bottom w3-large w3-container w3-padding-16 w3-dark-gray">
    Agatha Christie was the first grown-up author I read...<br>-Declan Hughes
  </div>
</div>

<div class="w3-display-container w3-black mySlides">
  <img src="ap7.jpg" style="width:40%">
  <div class="w3-display-bottom w3-large w3-container w3-padding-16 w3-blue">
    My favourite Agatha Christie novel, After the Funeral, has a brilliant plot...<br>-Sophie Hannal
  </div>
</div>

</div>
<br><br>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-pink w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="http://localhost/package/login/hhome1.php" >AC Association</a></p>
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-pink w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="http://localhost/package/login/about.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

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



<script>

		$('.js-go-night').click(function(){
			$('body').addClass('night');
			$('div').addClass('night');
			$('li').addClass('night');
		});
		$('.js-go-day').click(function(){
			$('body').removeClass('night');
			$('div').removeClass('night');
			$('li').removeClass('night');
		});
		var counter = 0;
		$(".chapter-thumbnail").click(function(){
			$("#mainViewer").html(
				$(this).html());
			var id = $(this).attr("id");
			counter = parseInt(id.slice(-1));
		});
		$("#chapter"+counter).click();
		$("#mainViewer").click(function (event){
			if(event.offsetX
				< $(this).width()*0.3){
				counter = counter - 1;
			} else {
				counter = counter + 1;
			}
			if(counter < 0){
				counter =  0;
			}
			if(counter >=
				$(".chapter-thumbnail").length){
				counter =
			$(".chapter-thumbnail").length-1;
			}
			$("#chapter"+counter).click();
		});

	</script>

</body>
</html>