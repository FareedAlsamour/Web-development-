<?php
	$arr = [2,3,4];
	function multi($arr){
		foreach ($arr as $value) {
			$calcu[] = $value * 5;
		}
		return $calcu;
	}
	$result = multi($arr);
	var_dump($result);
?>