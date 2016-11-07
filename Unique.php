<?php

	echo "Example 1 = Unique string<br>";
	echo md5(time() . mt_rand(1,1000000));
	
	echo "<br><br>Example 2 = Unique string<br>";
	echo uniqid();
 
	echo "<br><br>Example 3 = Unique string<br>";
	echo uniqid();

	echo "<br><br>Example 4 = Unique string with prefix<br>";
	echo uniqid('foo_');
 
	echo "<br><br>Example 5 = Unique string with entropy<br>";
	echo uniqid('',true);

	echo "<br><br>Example 6 = Unique string<br>";
	echo uniqid('bar_',true);

?>	