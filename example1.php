<?php
	function foo($arg1 = '', $arg2 = '') {
 
		echo "arg1: $arg1<br>";
		echo "arg2: $arg2<br>";
 
	}
 
 
	foo('hello','world');

	foo();
		echo "<br><br>";

		function word() {
			$args = func_get_args();
 
		foreach ($args as $k => $v) {
			echo "arg".($k+1).": $v\n";
		}
	}
 
	word(). "<br>";
 
	word('hello<br>');
 
	word('hello<br>', 'world<br>', 'again<br>');

?>