<html>
<body style="background-color:lightgrey; color:black;">
  <?php
      
     $con = mysqli_connect("localhost","root","","db_2");

     //Get form data
     $pro_id = $_POST['pro_id'];
     $pro_name = $_POST['pro_name'];
     $pro_price = $_POST['pro_price'];
     $qoh = $_POST['qoh'];

     //Insert record into the products table
     $sql = mysqli_query($con,"INSERT INTO products(Pro_id,Pro_name,Pro_price,QOH) VALUES ('$pro_id','$pro_name','$pro_price','$qoh') ");
  ?>
</body>
</html>