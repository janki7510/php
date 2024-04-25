<html>
<head>
    <title>Login Form</title>
<style>
   body{
     font-family: Arial;
     background-color:#f4f4f4; 
   }
   form{
     width:50%;
     background-color:grey;
     padding:20px;
   }
  label{
   font-weight:bold;
  }
</style>

<script>
function validateForm(){
 var name = document.form1.name.value;
 var password = document.form1.password.value;
 //var email = document.form1.email.value;
 var email = document.getElementById('email');
 var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/;

 if(name=="")
 {
   alert("Name can't be blank");
   return false;
 }
 else if(password=="")
 {
   alert("Password can't be blank");
   return false;
 }
 else if(password.length<5)
 {
  alert("Password must be at least 5 characters");
   return false;
 }
 if(!filter.test(email.value)){
   alert("Please Provide a valid email address");
   return false;
 }
 else{
   alert("Your email is valid");
 }
}
</script>
<script>
function keyDownEvent(){
	document.getElementById("name").style.backgroundColor = "red";
 }
 
 
function keyPressEvent(){
	document.getElementById("name").style.backgroundColor = "green";
 }
 
</script>
<?php

  $con = mysqli_connect("localhost","root","","unit2");

  if(isset($_POST['submit'])){
 
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = mysqli_query($con,"select * from login");

    $row = mysqli_num_rows($sql);
    if($row>0){ 
      echo "Welcome ".$name." and your email is: ".$email;
    }
    else{
      echo "Username and password incorrect";
    }
  }
?>
</head>

<center>
<h2> Login Form </h2>
 <form name="form1" method="post" action="#" onsubmit="return validateForm()">
Name: <input type="text" name="name" id="name" onkeydown="keyDownEvent()" onkeypress="keyPressEvent()"><br><br>

Passowrd: <input type="password" name="password" id="passowrd"><br><br>

Email: <input type="text" id="email" name="email"><br><br>

<input type="submit" name="submit" value="Submit">
</form>
</center>
</body>
</html>