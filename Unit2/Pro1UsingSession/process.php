<html>
<body style="background-color:lightgrey; color:black;">
   <h2>Welcome!</h2>
   <?php
     session_start();
     $_SESSION['name'] = $_POST['name'];
     $_SESSION['email'] = $_POST['email'];
     echo "Hello ".$_SESSION['name']." ". " Your email ID is " .$_SESSION['email'].".";
   ?>
</body>
</html>