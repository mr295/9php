<?php
//gets only .php files
	$files = glob('*.php');
 
	print_r($files);

	echo "<br><br>";
//gets php and txt files	
	$files = glob('*.{php,txt}', GLOB_BRACE);
	
	print_r($files);

	echo"<br><br>";
//gets files from path
	$files = glob('../images/*.jpg');
	
	print_r($files);

	echo "<br><br>";
//gets the full path
	$files = glob('../images/*.jpg');
	$files = array_map('realpath',$files);
	
	print_r($files);
?>