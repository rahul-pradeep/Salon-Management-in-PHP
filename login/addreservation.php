<?php
session_start();

if (empty($_SESSION['login'])) {
	echo "<script type='text/javascript'>alert('Please login first to access this page');</script>";
	echo "<script type='text/javascript'> window.location.href='../index.html';</script>";
	exit();
}
?>
<html>
<body>


 <?php
$servername = 'localhost';
$username = 'rahul';
$password = 'Rahul99@';
$dbname = 'rbeaut';


$email=$_SESSION['login'];
$name=$_POST["name"];
$service=$_POST["service"];
$contact=$_POST["mobile"];
$date=$_POST["date"];
$time=$_POST["time"];
$message=$_POST["message"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Reservations (name,service,contact,date,time,message,email)
VALUES ('$name','$service','$contact','$date','$time','$message','$email')";

if ($conn->query($sql) === TRUE) {
	$conn->close();
    echo "<script type='text/javascript'>alert('Reservation registered successfully!');</script>";
    echo "<script type='text/javascript'> window.location.href='mainpage.php';</script>"; 
				 exit;
    
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 

</body>
</html> 
