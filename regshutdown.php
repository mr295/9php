<?php

  // capture the start time
  $start_time = microtime(true);
  echo "Example 1 = Display Time<br>"; 
  // display how long the script took
  echo "Execution took: ".
        (microtime(true)  -  $start_time).
        " Seconds.";
   
   //example 2     
   $start_time = microtime(true);
   echo "<br><br>Example 2 = Display Time<br>"; 
 
  register_shutdown_function('my_shutdown');
 
  function my_shutdown() {
      global $start_time;
 
      echo "Execution took: ".
            (microtime(true) - $start_time).
            " seconds.";
}
?>