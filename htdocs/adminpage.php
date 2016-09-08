<?php
include "connect.php";
session_start();



  
?>

<!DOCTYPE html>
<html>

<head>
   
	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
	
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
	<script src = "https://code.jquery.com/jquery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	
	<link type="text/css" rel="stylesheet" href="stil.css"/>
	
	

	
	<title>My template</title>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
</head>
<body>
	<div id="container">
		<div id="nav">
			<div class="col-xs-12">
			
			
			
			<?php
			// if session is set continue
			if(isset($_SESSION['utilizator']))
				{
				if($_SESSION['utilizator'] == 1){
					if(isset($_SESSION['nume'])){
					echo "<p>Bine ai venit ".$_SESSION['nume']."! </p> ";
				}
				}
			else{
				if($_SESSION['utilizator'] == 0)
				{
					header("location: index.php");
				}
				}   
	   
				echo "<p><a href=logout.php>Log Out</a></p>";
				}


			// if session is Not set
			if(!isset($_SESSION['utilizator']))
				{
				header("location:login.php");
				}

			?>
			<form id="search">
			<input type="text" tabindex="1">
			</form>
			
			
		</div></div>
		
		<div id="meniu">
		<p class="redirect"><a href="index.php">Go to your Online Shop</a></p>
		<div class="col-md-6"><a href="clients.php">See your CLIENTS</a></div>
		<div class="col-md-6"><a href="store.php">See your STORE</a></div>
		
		
		</div>
		<div id="footer">
		</div>
	</div>
</body>
