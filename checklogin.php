<?php
session_start();
?>
<html>
<body>

 <?php
$servername = 'localhost';
$username = 'rahul';
$password = 'Rahul99@';
$dbname = 'rbeaut';

$em=$_POST["email"];
$pw1=$_POST["password"];
$pw=md5($pw1);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email,password FROM User where email='$em'";
$result = $conn->query($sql);
$flag=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($row["email"]==$em && $row["password"]==$pw)
             { 
				 $flag=1;
				 $_SESSION['login']=$_POST['email'];
				 
					$conn->close();
				 header("Location: login/mainpage.php"); 
				 exit;
			}
    }
	
}


if($flag==0)  {
	 
	 $conn->close();
	 echo "<script type='text/javascript'>alert('Invalid Username or Password!..');</script>";
	  echo "<script type='text/javascript'> window.location.href='index.html';</script>";
	 
    
}


?> 

</body>
</html>
