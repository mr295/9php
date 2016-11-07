<?php
//example 1
echo "Example 1 CPU Usage";
	print "<pre>"; //shows vertically 
	print_r(getrusage());
	print "</pre>";
	
//example 2 CPU power consumed by script
echo "Example 2 CPU Power consumed by script<br>";
	sleep(3);
	
	$data = getrusage();
	echo "User time: ".
		($data['ru_utime.tv_sec'] +
		$data['ru_utime.tv_usec'] / 1000000);
	echo "<br>System time: ".
		($data['ru_stime.tv_sec'] +
		$data['ru_stime.tv_usec'] / 1000000);
		
//example 3 high CPU power consumtion, loop 10 million times
echo "<br><br>";
echo "Example 3 CPU Power consumtion<br>";
	for($i=0;$i<10000000;$i++) {
 
	}
 
	$data = getrusage();
		echo "User time: ".
			($data['ru_utime.tv_sec'] +
			$data['ru_utime.tv_usec'] / 1000000);
		echo "<br>System time: ".
			($data['ru_stime.tv_sec'] +
			$data['ru_stime.tv_usec'] / 1000000);
			
//example 4 System time
echo "<br><br>";
echo "example 4 System time<br>";
	$start = microtime(true);

		while(microtime(true) - $start < 3) {
 
	}
 
	$data = getrusage();
		echo "User time: ".
			($data['ru_utime.tv_sec'] +
			$data['ru_utime.tv_usec'] / 1000000);
		echo "<br>System time: ".
			($data['ru_stime.tv_sec'] +
			$data['ru_stime.tv_usec'] / 1000000);
?>