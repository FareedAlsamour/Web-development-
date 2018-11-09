<?php
	$student[first_name] = "Fareed";
	$student[last_name] = "Samour";
	$student[email] = "Fareedmadrid07@gmail.com";
	function data($student){
		echo "This array has three values key : first_name ,last_name and email. <br>";
		echo "first_name key will give is: $student[first_name] .<br>";
		echo "last_name key will give is: $student[last_name] .<br>";
		echo "email key will give is: $student[email] .<br>";
	}
	$result = data($student);
	echo ($result);
?>