<?php
	$arr = [20,10,21,8,7,6,2,13,3];
	function ave($arr){
		return array_sum($arr)/count($arr);
	}
	$result = ave($arr);
	echo ($result);
?>