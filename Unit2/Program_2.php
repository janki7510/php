<html>
<body style="background-color:lightgrey; color:black;">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create a Connection
$con = new mysqli($servername,$username,$password );

// Check connection
if($con->connect_error){
   die("Connection failed: ".$con->connect_error);
}

// Create database
$sql = "create database if not exists DB_1";
if($con->query($sql) === TRUE){
  echo "Database created successfully";
} else {
    echo "Error creating database: ".$con->error;
}

$con->close();
?>

</body>
</html>