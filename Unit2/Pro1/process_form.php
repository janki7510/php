<html>
<body style="background-color:lightgrey; color:black;">
   <h2>Welcome!</h2>
   <?php
     
     $name = $_POST['name'];
     $email = $_POST['email'];
     echo "Hello, $name! Your email ID is: $email.";
	 
   ?>
</body>
</html>