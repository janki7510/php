<html>
<body style="background-color:lightgrey; color:black;">
<center>
  <?php
   $con = mysqli_connect("localhost","root","","db_2");

   // Get Pro_id and QOH from the form
   $pro_id = $_POST['pro_id'];
   $new_qoh = $_POST['qoh'];

   // Update the product quantity
   $sql = mysqli_query($con,"UPDATE products SET QOH = '$new_qoh' WHERE Pro_id = '$pro_id' ");

  ?>

</center>
</body>
</html>