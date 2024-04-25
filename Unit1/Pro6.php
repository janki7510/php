<html>
<body style="background-color:lightgrey; color:black;">
<?php
  
  //Define a multidimensional array with student information
  $students = array(
      array("Janki","Patel",20),
      array("Taehyung","Kim",27),
      array("Namjoon","Kim",29)
  );
  
  
  //Display the studnet information using a for loop
  
  for($i=0; $i<count($students); $i++)
  {
    echo "Student".($i+1).":\n";
    echo "  First Name: ".$students[$i][0];
    echo "  Second Name: ".$students[$i][1];
    echo "  Age: ".$students[$i][2]."<br><br>";
  }


  //Using Nested loop
  for($i=0; $i<count($students); $i++){
    for($j=0; $j< count($students[$i]); $j++){
     echo $students[$i][$j]." ";
   }
  echo "<br>";
  }

  echo "<br><br>";
  //Using foreach loop
  foreach($students as $element){
    foreach($element as $nestedElement){
      echo $nestedElement."  ";
   }
   echo "<br>";
  }
?>
</body>
</html>