<?php
 
 $con = new mysqli("localhost","root","","information");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];
$mo = $_POST['mo'];

$sql = "INSERT INTO table1 (Name,Email,Password,DOB,Mobile) VALUES('$name','$email','$pass','$dob','$mo')";

if($con->query($sql) == TRUE)
{ echo "Record Inserted Successfully"; }
else
{ echo "Failed"; }
?>