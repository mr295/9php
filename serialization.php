<?php
  echo "Example 1 = Complex Array<br>";
  // a complex array
  $myvar = array(
      'hello',
      42,
      array(1,'two'),
      'apple'
  );
 
  echo "<br><br>Example 2 = convert to string<br>"; 
  // convert to a string
    $string = serialize($myvar);
 
    echo $string;
 
  echo "<br><br>Example 3 = reproduce original variable<br>";
  // you can reproduce the original variable
  $newvar = unserialize($string);
 
  print "<pre>";
  print_r($newvar);
  print "</pre>";
  
  echo "<br><br>Example 4 = Complex Array<br>";
  // a complex array
  $myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
  );

  // convert to a string
  $string = json_encode($myvar);
 
  echo $string;
 
  // you can reproduce the original variable
  $newvar = json_decode($string);
 
  print "<pre>";
  print_r($newvar);
  print "</pre>";
 ?>