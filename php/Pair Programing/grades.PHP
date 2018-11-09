<?php
	$x = mt_rand(40, 100);
	if ($x <= 65) {
		echo "<h1 style= \"color:red\"> Your score is: $x/100 </h1><h2 style= \"color:red\"> You better go <b>Die</b>.</h2>";
	}

	if ($x > 65 && $x <= 85) {
		echo "<h1 style= \"color:yellow\"> Your score is: $x/100 </h1><h2 style= \"color:yellow\"> Your grade is C.</h2>";
	}

	if ($x > 85 && $x <= 95) {
		echo "<h1 style= \"color:blue\"> Your score is: $x/100 </h1><h2 style= \"color:blue\"> Your grade is B.</h2>";
	}

	if ($x > 95) {
		echo "<h1 style= \"color:green\"> Your score is: $x/100 </h1><h2 style= \"color:green\"> You are a F***** <b>Nerd<b>.</h2>";
	}
?>