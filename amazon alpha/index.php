<?php
session_start();
// will print 'cookieValue'
?>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<div class="container">
	<br>
<div class="row">
<form class="col s12" action="process.php" method="post">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="BOOK TITLE" type="text" class="validate" name="first_name">
      <label for="first_name"><b>Book Title</b></label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="text" class="validate" name="author" placeholder="Author(s)">
      <label><b>Author(s)</b></label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="number" class="validate" name="stock" placeholder="Stock available">
      <label><b>Stock available</b></label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="date" class="validate" name="year" placeholder="Year">
      <label><b>Year</b></label>
    </div>
  </div>
  <button class="btn waves-effect waves-light" type="submit" value="submit">
	<i class="material-icons">Submit</i>
  </button>        
</form>
</div>
</div>