<?php
	session_start();

	require_once ("login.php");

	login();
?>
<!DOCTYPE html>
<html>
<head>
	<title>QLSV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<form method="POST" action="process_form.php">
	    <div class="form-group">
	      <label for="Username">Username</label>
	      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
	    </div>
	    <div class="form-group">
	      <label for="Password">Password</label>
	      <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
	    </div>
    <div class="checkbox">
      	<label><input type="checkbox" name="remember">Remember me</label>
    </div>
    	<button type="submit" class="btn btn-default">Submit</button>
  	</form>
	</div>
</body>
</html>