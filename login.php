<?php
include('loginconn.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="allcss/login.css">
</head>
<body>
<div Class="BackgroundImage">
	<div Class="Menu">
		<div class="LeftMenu">
			<h4>NepCaRental</h4>
		</div>
		<div class="RightMenu">
		   <nav>
			<ul>
				<a href="index.html"><li id="HomeColor">Home</li></a>
				<a href="ourservices.html"><li id="OurServices">Our Services</li></a>
				<a href="cars.html"><li id="Cars">Cars</li></a>
				<a href="signup.html"><li id="SignUp">SignUp</li></a>
				<a href="login.php"><li id="LogIn">LogIn</li></a>
				<a href="aboutus.html"><li id="About Us">About Us</li></a>
			</ul>
		   </nav>
		</div>
	</div>
	   <div class="Form" >
       <h1>LOGIN</h1>
	   	  <div>
	   	  	<form method="post" action="loginconn.php">
	   	  		<table >
	   	  			<h1>
	   	  				
	   	  			<tr>
	   	  				<td>Email:</td>
	   	  				<td><input type="text" name="Email" class="textInput" placeholder="ratnet777@gmail.com"></td>
	   	  			</tr>
	   	  			<tr>
	   	  				<td>Password:</td>
	   	  				<td><input type="password" name="password" class="textInput" ></td>
	   	  			</tr>
	   	  			<tr>
	   	  			<td><input id="button1" type="submit" name="Login" value="LOGIN"></td>
	   	  			</tr>
	   	  		</h1>
	   	  		</table>
	   	  	</form>
	   	  </div> 
        </div>
           
</div>
</body>
<footer class="foot">
	<div class="images">

		<img src='allcss/images/facebook.png' class="facebook" >

		<img src='allcss/images/twitter.png' class="twitter" >
		
		<img src='allcss/images/googleplus.png' class="googleplus" >
	</div>
		
	
</footer>
</html>