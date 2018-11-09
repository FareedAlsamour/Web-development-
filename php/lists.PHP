<?php
	$arr = ["coding",2,07];
	function table($arr){
		echo "<ul><br>";
		echo "<li> $arr[0] </li><br>";
		echo "<li> $arr[1] </li><br>";
		echo "<li> $arr[2] </li><br>";
		echo "</ul><br>";
	}
	$result = table($arr);
	echo $result;
?>