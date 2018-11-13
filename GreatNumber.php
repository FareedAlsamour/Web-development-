<?php
session_start();
if (!isset($_SESSION["random"])) {
	$_SESSION["random"] = rand(1, 100);
}

	$number = $_POST["number"];
	$submit = $_POST["submit"];
	$restart = $_POST["restart"];

	?>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<body>
	<div class="container">
		<header><h2>Welcome to the great number game!</h2></header>
		<h4 class="center">Im thinking of a number between 1 and 100</h4>
		<h4 class="center">Take a guess!</h4>
		<br>
		<?php
		if ($submit) {
			if ($number < 101) {
				if ($number < $_SESSION["random"]) {
				echo "<div class=center><h1>Too Low</h1></div>";
				}
				elseif ($number > $_SESSION["random"]) {
				echo "<div class=center><h1>Too High</h1></div>";
				}
				else {
				echo "<div class=center><h1>Great..<br> $number was the number!</h1>
				<br><form action=? method=POST><input class=btn waves-effect waves-light type=submit name=restart value=PlayAgain!></form></div>";
				session_destroy();
				}
				
			}
		}
		?>
		<form action="?" method="POST">
			<input type="text" name="number">
			 <button class="btn waves-effect waves-light" type="submit" name="submit" value="submit">
			<i class="material-icons">Submit</i>
 			 </button>        
		</form>
	</div>
</body>


