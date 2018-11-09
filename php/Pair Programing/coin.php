<?php
	$tail = 0;
	$head = 0;
	$output = "head!";
	echo "Program has started<br>";
	for($i = 1;$i<=1000;$i++){
		$res = mt_rand(0, 1);
		if ($res === 1) {
			$output = "tail!";
			$tail++;
		}
		else {
			$head++;
		}
		echo "Attempt $i : Coin is in the air... Its a $output... So far $head head(s) and $tail tail(s)<br>";
	}
	echo "Program has ended, nice!";
?>