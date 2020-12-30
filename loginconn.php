<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['Login'])) {
if (empty($_POST['Email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$Email = $_POST['Email'];
$password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "carental");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT Email, password from user where Email=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $Email, $password);
$stmt->execute();
$stmt->bind_result($Email, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $Email; // Initializing Session
          header("location: profile.php"); // Redirecting To Profile Page
        }
else {
       
       $error = "Email or Password is invalid";
       echo "Email or Password is invalid.Go back by pressing back Button ";
 
     }
mysqli_close($conn); // Closing Connection
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Error</title>
</head>
<body>
	

</body>
</html>