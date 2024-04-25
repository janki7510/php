<html>
<body style="background-color:lightgrey; color:black;">
<center>

  <?php
   $con = mysqli_connect("localhost","root","","db_2");

   // Get Pro_id from the form
   $pro_id = $_POST['pro_id'];
  
   $sql = mysqli_query($con,"DELETE FROM products WHERE Pro_id = '$pro_id' ");

   ?>

</center>
</body>
</html>