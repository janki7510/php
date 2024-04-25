<html>
<body style="background-color:lightgrey; color:black;">
  <h1>Array Sorting</h1>
  <?php
  // Define an  array of 5 numbers
  $numbers = array(5,2,7,3,10);
  
  // Sort the array in ascending order
  sort($numbers);

  echo "<h2>Ascending Order:</h2>";
  foreach($numbers as $num){
      echo $num." ";
  }
  echo "<br>";
  // Sort the array in descending order
  rsort($numbers);

  echo "<h2>Descending Order:</h2>";
  foreach($numbers as $num){
      echo $num." ";
  }
  echo "<br>";

  //Sorting by value, maintaining index association

  $num = array(1=>50,2=>30,3=>40,4=>10,5=>20);
  
  asort($num);
  echo "<h2>Ascending Order(Maintaining key Association):</h2>";
  foreach($num as $key => $value){
    echo "[$key => $value]"." ";
  }
  echo "<br>";

  //Sorting by key
  ksort($num);
  echo "<h2>Ascending Order by key:</h2>";
  foreach($num as $key => $value){
    echo "[$key => $value]"." ";
  }
  echo "<br>";

  //Sorting by value in descending order, maintaining index association
  arsort($num);
  echo "<h2>Descending Order(Maintaining key Association):</h2>";
  foreach($num as $key => $value){
    echo "[$key => $value]"." ";
  }
  echo "<br>";

  //Sorting by key in descending order
  krsort($num);
  echo "<h2>Descending Order by key:</h2>";
  foreach($num as $key => $value){
    echo "[$key => $value]"." ";
  }
  echo "<br>";

  ?>
</body>
</html>