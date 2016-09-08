<?php
session_start();
require_once("connect.php");
?>

<!DOCTYPE html>
<html>

<head>
	<link type="text/css" rel="stylesheet" href="stil.css"/>

	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
	
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
	<script src = "https://code.jquery.com/jquery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	
	<title>My template</title>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script>
	$(document).ready(function() {
    $( '.dropdown' ).click(function(){
           $(this).children('.sub-menu').slideToggle('fast');
        });
	});
	</script>
	
</head>
<body>
	<div id="container">
		<div id="nav">
			
			<div class="col-xs-12">
			<p><a href="register.php">Register</a> / <a href="login.php">Login</a></p>
			<form id="search">
			<input type="text" name="search" tabindex="1">
			</form>
			
			
		</div></div>
		<div id="navbar1">
			<?php include "meniu.php"; ?>
		</div>
		
		<div id="content">
			<h1>Create Account</h1><hr>
			<form id="register" method="POST" action="afis.php" >
				<div>
				<label>Last name</label><br>
				<input type="text" name="lname" required autofocus>
				</div>
				
				<div>
				<label>First name</label><br>
				<input type="text" name="fname" required autofocus>
				</div>
				
				<div>
				<label>Email address</label><br>
				<input type="email" name="email" required autofocus>
				</div>
				
				<div>
				<label>Password</label><br>
				<input type="password" name="pass" required autofocus>
				</div>
				<div>
				<button type="submit">Create</button>
				<button type="reset">Reset</button>
				</div>
			</form>
		</div>
		<div id="footer">
		<p class="col-md-6"><a href="index.html">CV</a></p>
		<p class="col-md-6"><a href="http://csac.ulbsibiu.ro/">CSAC</a></p>
		</div>
	</div>
</body>
