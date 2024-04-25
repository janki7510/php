<html>
<body style="background-color:lightgrey; color:black;">
  <?php
    //Create a coonection
    $con = mysqli_connect("localhost","root","","db_2");
    
    //SQL to create a table
    $sql = mysqli_query($con,"CREATE TABLE products( 
                    Pro_id INT(6) PRIMARY KEY,
                    Pro_name VARCHAR(10) NOT NULL,
                    Pro_price DECIMAL(10,2) NOT NULL,
                    QOH INT(6) UNSIGNED
            )");

  

  ?>

</body>
</html>