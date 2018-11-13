<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<div class="container">
	<div class="center"><h3>Here's what you have submitted:</h3></div>
	<br>
	<table>
	<thead>
	  <tr>
	      <th>Book Name</th>
	      <th>Author(s)</th>
	      <th>Stock Available</th>
	      <th>Year</th>
	  </tr>
	</thead>

	<tbody>
	  <tr>
	    <td><b><?php echo $_POST['first_name'];?></b></td>
	    <td><b><?php echo $_POST['author'];?></b></td>
	    <td><b><?php echo $_POST['stock'];?></b></td>
	    <td><b><?php echo $_POST['year'];?></b></td>
	  </tr>
	</tbody>
	</table>
	<br>
	<br>
	<form action="index.php" method="get">
	<button class="btn waves-effect waves-light" type="submit" value="submit">
	<i class="material-icons">Change order</i>
  </button>
	</form>
</div>