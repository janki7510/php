<html>
<body style="background-color:lightgrey; color:black;">
  <h1>Count Specific Value</h1>
  <?php
   
   //Define an array of numbers
   $numbers = array(1,2,3,4,2,5,2,6,7,2);
 
   //Specify the value to count
   $value = 2;
  
   //Count the number of time the value appears in the array using if condition
   $count = 0;
   foreach($numbers as $num){
      if($num == $value){
        $count++;
      }
   } 
  
   //Display the result
   echo "The value $value appears $count times in the array.";

   echo "<br><br>";
   //2nd way 
   $counts = array_count_values($numbers);
   $c = $counts[$value];
   echo "The value $value appears $c times in the array.";
  
  ?>
</body>
</html>