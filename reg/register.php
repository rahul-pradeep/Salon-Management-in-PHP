﻿<html>
<body>


 <?php

 error_reporting(E_ALL);
 ini_set('display_errors',1);

$servername = getenv("mysql_hostname");
$username = getenv("mysql_username");
$password = getenv("mysql_password");
$dbname = getenv("mysql_database");

$name = $_POST["name"];
$mail=$_POST["email"];
$pw1=$_POST["password"];
$mb=$_POST["mobile"];

$pw=md5($pw1);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1="SELECT email from Individual where email='$mail'";
$result1= $conn->query($sql1);

$r1=$result1->num_rows;

if ($r1 == 0) {

$sql = "INSERT INTO Individual (name,email,password,mobile)
VALUES ('$name','$mail','$pw','$mb')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

				  
				 exit;
 
}

else
{

$conn->close();
echo "<script type='text/javascript'>alert('Email already exists!');</script>";
 echo "<script type='text/javascript'> window.location.href='register.html';</script>";

}
?> 

</body>
</html> 
