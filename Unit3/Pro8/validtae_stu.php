<html>
<head>
</head>
<body>
<?php
  $con = mysqli_connect("localhost","root","","student");
  
  $name=$_GET["fname"];
  $contact=$_GET["contact"];
  $email=$_GET["email"];
  $address=$_GET["address"];  
  
  $sql = mysqli_query($con,"select email from stu2 where email = '$email'");
  $row=mysqli_num_rows($sql);
  
  if($row>0){
	  echo "$email already exists..";
  }
  else{
	  $sql=mysqli_query($con,"insert into stu2 values('$name','$contact','$email','$address')");
  }
 
?>

</body>
</html>