<html>
<body bgcolor="grey">

<?php
   // Create an array named $sub and assign elements to it
   $sub = array("C++","Java","Html","CSS","Php");
  
   // Display the elements assigned using a for loop
   echo "Using for loop:<br>";
   for($i=0; $i<count($sub); $i++){
       echo "Subject ".($i+1).": ".$sub[$i]."<br>";
      //echo $sub[$i]."<br>";
   }
   
   // Display the elements assigned using a foreach statement
   echo "<br>Using foreach loop:<br>";
   foreach($sub as $key => $value){
       echo "Subject ".($key+1).": ".$value."<br>";
      //echo $value."<br>";
   }
?>
</body>
<html>