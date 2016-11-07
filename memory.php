<?php
	echo "Initial: ".memory_get_usage()." bytes<br>";
 
// let's use up some memory
	for ($i = 0; $i < 100000; $i++) {
		$array []= md5($i);
	}
 
// let's remove half of the array
	for ($i = 0; $i < 100000; $i++) {
		unset($array[$i]);
	}
 
	echo "Final: ".memory_get_usage()." bytes<br>";
 
	echo "Peak: ".memory_get_peak_usage()." bytes \n";

?>