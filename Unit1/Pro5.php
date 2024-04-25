<html>
<body style="background-color:lightgrey; color:black;">
<?php
  // Create an array named $student with 5 elements bound to different keys
  $student = array( 
       "name" => "Junu",
       "age" => 20,
       "marks" => 88,
       "city" => "Ahmedabad", 
       "country" => "India"
  );
  
 // Access the elements using the key 
 echo "Name: ".$student["name"]."<br>";
 echo "Age: ".$student["age"]."<br>";
 echo "Marks: ".$student["marks"]."<br>";
 echo "City: ".$student["city"]."<br>";
 echo "Country: ".$student["country"]."<br>";


?>

</body>
</html>