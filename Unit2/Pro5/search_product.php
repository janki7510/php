<html>
<body style="background-color:lightgrey; color:black;">
<center>
  <?php
   $con = mysqli_connect("localhost","root","","db_2");

   // Get Pro_id from the form
   $pro_id = $_POST['pro_id'];

   $sql = mysqli_query($con,"SELECT * FROM products WHERE Pro_id = '$pro_id' ");

   //Display products details intable
   echo "<h2>Product Details</h2>";
   echo "<table border='1'>";
   echo "<tr><th>Pro_id</th><th>Pro_name</th><th>Pro_price</th><th>QOH</th></tr>";
   
   while($row = mysqli_fetch_row($sql))
   {
      echo "<tr>";
      echo "<td>".$row[0];
      echo "<td>".$row[1];
      echo "<td>".$row[2];
      echo "<td>".$row[3];
   }

   echo "</table>";

  ?>
</center>
</body>
</html>