<?php
//putted in htdocs folder
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$Email = filter_input(INPUT_POST, 'Email');
 $password = filter_input(INPUT_POST, 'password');
 $password2 = filter_input(INPUT_POST, 'password2');
 if (!empty($fname)) {
if (!empty($lname)) {
if (!empty($Email)){
if (!empty($password)){
if (!empty($password2)) {
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "carental";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
if ($password != $password2) {
echo "Password & passwordconfirmation did not match";


  $conn->close();
  }
else{
  $sql = "INSERT INTO user (fname, lname, Email, password,password2)
  values ('$fname','$lname','$Email','$password','$password2')";
  if ($conn->query($sql)){
   echo "New record is inserted sucessfully";
}
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "passwordconfirmation should not be empty";
}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Email should not be empty";
  die();
 }
}
else{
  echo "Lastname should not be empty";
}
}
 else{
  echo "Firstname should not be empty";
 }

 ?>