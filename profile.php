<?php



include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: loginconn.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>NepCaRental</title>
	<link rel="stylesheet" type="text/css" href="allcss/profile.css">
</head>
<body>
<div >
	<div Class="Menu">
		<div class="LeftMenu">
			<h4>NepCaRental</h4>
		</div>
		<div class="RightMenu">
		   <nav>
			<ul>
				<li id="About Us">Welcome:<i><?php echo $login_session; ?></i></li>
				<a href=""><li id="profile">Profile</li></a>
				<a href="center.php"><li id="carcenter">CarCenter</li></a>
				<a href="list.php"><li id="booklist">Book lists</li></a>
				<a href="logout.php"><li id="Logout">Logout</li></a>
				</ul>
		   </nav>
		</div>
	</div>
	   <div class="Text">

	   	  
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