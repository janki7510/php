<?php
  
   $n = $_GET['combo'];
   echo "Selected Product: ".$n;
   echo "<br><br>"; 
   
   $subject = explode(',',$_GET['s']);
   echo "Selected Subjects:<br>";
   foreach($subject as $sub){
	   echo $sub."<br>";
   }
  
   
   //$n1 = isset($_GET['sem']) ? $_GET['sem'] : 'No Semester Selected';
   $n1 = $_GET['sem'];
   echo "<br><br>";
   echo "Selected Semester:".$n1;
    

?>