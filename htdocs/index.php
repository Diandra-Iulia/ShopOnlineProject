<?php
include "connect.php";
session_start();

// if session is set continue

/*if(isset($_SESSION['utilizator']))
   {
	echo" Bine ai venit ";
	echo "<a href=logout.php>Log Out</a>"; 
   }


// if session is Not set
if(!isset($_SESSION['utilizator']))
   {
	echo" <a href=login.php>Inreagistreaza-te</a>";
   }*/

  
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
			
			
			<?php

			if(isset($_SESSION['utilizator']))
			{
				if($_SESSION['utilizator']==1){
					echo "<p><a href=adminpage.php>Go back to AdminPage</a></p>";
				}
				echo "<p><a href=logout.php>Log Out</a></p>";
				if(isset($_SESSION['nume'])){
					echo "<p>Welcome ".$_SESSION['nume']."! </p> ";
					
				}
				
				
						
			}
			else if(!isset($_SESSION['utilizator']))
				{
			//echo" <a href=login.php>Inreagistreaza-te</a>";
   
			echo "<p><a href=register.php>Register</a> / <a href=login.php>Login</a></p>";
			}
			?>
			
			<form id="search">
			<input type="text" tabindex="1">
			</form>
		
			
			
			
			
		</div></div>
		<div id="navbar1">
			<?php include "meniu.php"; ?>
		</div>
		<div id="header"></div>
		
		<div id="continut">
		<?php
		include "connect.php";
		$sql="SELECT * FROM categorie";
		$rez=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($rez)){
			echo "<div class=col-md-4><a href=produse.php?idul=".$row['id'].">".$row['nume']."</a></div>";
		}
		?>
		<!--<div class="col-md-4"><a href="#">LIVING ROOM</a></div>
		<div class="col-md-4"><a href="#">HOME OFFICE</a></div>
		<div class="col-md-4"><a href="#">BEDROOM</a></div>
		<div class="col-md-4"><a href="#">KITCHEN</a></div>
		<div class="col-md-4"><a href="#">ACCESSORIES</a></div>-->
		</div>
		<div id="footer">
		<p class="col-md-6"><a href="index.html">CV</a></p>
		<p class="col-md-6"><a href="http://csac.ulbsibiu.ro/">CSAC</a></p>
		</div>
	</div>
</body>
