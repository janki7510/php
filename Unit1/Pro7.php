<html>
<body style="background-color:lightgrey; color:black;">
<?php
  
  //Non-Parameterized function
  function concatenateStrings() {
     $string1 = "Hello, ";
     $string2 = "How are you? <br>";
     $result = $string1 . $string2;
     return $result;
  }

  // Call the function and display the result
   echo concatenateStrings();
  
  // Parameterized function
  function concatenateStringsParam($string1,$string2) {
     $result = $string1 . $string2;
     return $result;
  }

  // Call the function with arguments and display the result
  echo concatenateStringsParam("Janki, ","Patel");

?>
</body>
</html>