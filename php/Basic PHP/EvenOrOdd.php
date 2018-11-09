<?php
for ($i=1; $i < 1350; $i++) {
	$key = "odd";
	if ($i%2==0) {
		$key = "even";
	}
	echo "Number is " .$i.". An ".$key." Number.";
	echo "<br>";
}
?>

