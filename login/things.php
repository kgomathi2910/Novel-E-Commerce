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

.card {
  float: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: Lucida, sans-serif;
  padding: 10px 10px 10px 10px;
  background-color: #ffffcc;
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
	font-size:16px;
	background: linear-gradient(to bottom right, #808080 0%, #ffffff 100%);
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
	12 Things You Didn't Know About Murder on the Orient Express
</div>
<br><br>
<div class="s">
<b>Agatha Christie expert Chris Chan reveals some lesser-known facts about one of Christie's most famous works.</b><br><br>

1. Christie got her inspiration from her own travels. In 1931, Christie travelled home from the Middle East on the Orient Express, Christie noted all of the different nationalities of her fellow passengers, and some of them became prototypes of Murder on the Orient Express characters. Also, Christie endured delays caused by flooding wiping out train tracks during other travels, and there was a real-life case where the Orient Express was caught in a snowdrift, though Christie was not aboard the train at that time.<br><br>

2. The Daisy Armstrong case was inspired by a real-life crime. Charles Lindbergh rose to fame by flying across the Atlantic Ocean, but he was in the headlines for a much more terrible reason some years later when his young son was kidnapped and later found murdered. Many details from the Armstrong case mirror the real-life crime, including a wrongly accused servant killing herself, though Charles and his wife Anne lived for decades after the kidnapping. <br><br>

3. The book’s title was changed in America. When the novel was first published in the United States, it was re-titled Murder on the Calais Coach. This was done so the book would not be mistaken for the Graham Green novel Orient Express, which received that title in the U.S. because the publishers thought that title would reach a better audience than the original British title of Stamboul Train. Are you keeping up?<br><br>

4. Christie mentioned Murder on the Orient Express in other books. Poirot obliquely reveals the solution to the story in Cards on the Table when he shows a young woman the murder weapon from that crime (so don’t read Cards on the Table before you read Murder on the Orient Express!). At the end of Murder in Mesopotamia, the narrator reveals that Poirot got caught up in a murder on the famous train on the way home, and a character in Appointment with Death also is aware of some of the secrets behind the Orient Express crime.<br><br>

5. This isn’t the first time Christie used her knowledge of Russian as a plot point. The Cyrillic alphabet plays a critical role in explaining a vital clue found at the murder scene. A similar knowledge of Russian proves critical to Poirot’s solution of a jewel robbery case in the short story 'The Double Clue'.<br><br>

6. The 1974 film version was a runaway success. For years, Sidney Lumet’s version of Murder on the Orient Express was Great Britain’s highest-grossing movie. It was nominated for many awards and won several. Albert Finney was Oscar-nominated for playing Poirot, and Ingrid Bergman took home her third Academy Award for her supporting performance as Greta Ohlssen.<br><br>

7. Christie had one problem with the 1974 film. Christie approved of the film version of Murder on the Orient Express. There was one problem – Christie didn’t think that Finney’s moustache was “the finest moustache in England,” as she described it in her work.<br><br>

8. The Royal Family helped get the movie made. Reportedly, Lord Louis Mountbatten, the father-in-law of one of the producers, helped convince Christie to grant the rights to the movie. Charles Dance, who played Justice Wargrave in the recent BBC adaptation of And Then There were None and Septimus Bligh in the Marple adaptation of By the Pricking of My Thumbs, played Mountbatten in The Crown.<br><br>

9. It became a video game. In 2006, a computer game adaptation of Murder on the Orient Express was released. David Suchet voiced Poirot, making this the only time that he has played Poirot in the same story for two different kinds of media. In the book, the player controls the character of the train employee Antoinette Marceau, who serves as Poirot’s assistant when the great detective is injured in the train crash. Poirot is also designed to be a helpful provider of hints in the game. The ending is changed very slightly to include a happier outcome.<br><br>

10. It’s been adapted for the stage. Famed dramatist Ken Ludwig recently adapted the story, and the play premiered in 2017 to enthusiastic responses. It has been produced by theatres all over the world since then. Six major characters are cut for the play. Many of the same suspects were deleted from a 2001 TV adaptation of Murder on the Orient Express starring Alfred Molina.<br><br>

11. Christie considered adapting it herself. When the famous playwright Ben Hecht asked Christie if he could adapt Murder on the Orient Express for the stage, she declined. She was considering writing an adaptation of the play herself, possibly including an original narrative focusing on the Armstrong kidnapping and how it affected everybody involved in it. The play was never written, but a 2015 Japanese miniseries used that idea, adapting the original novel in the first half, and depicting the backstory behind the crime in the second half.<br><br>

12. Some actors got travel sick filming the 2017 movie. When Kenneth Branagh filmed the 2017 adaptation, he hung television screens outside the windows of the train sets, and the images on the screens simulated the movement of the Orient Express. The effect was so realistic that a few members of the cast suffered from motion sickness!<br><br>
 </div>
 <br>
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
    <a class="w3-button w3-theme" href="http://localhost/package/login/things.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
</body>
</html>