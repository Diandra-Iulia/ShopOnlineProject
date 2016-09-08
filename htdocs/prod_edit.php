<?php
include "connect.php";
session_start();

	// if session is set continue
	
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
			<?php
				if(isset($_SESSION['utilizator']))
			{
				echo "<p><a href=logout.php>Log Out</a></p>";
				echo "<p><a href=adminpage.php>Go back to AdminPage</a></p>";
			if($_SESSION['utilizator'] == 1){
				if(isset($_SESSION['nume'])){
					echo "<p>Welcome ".$_SESSION['nume']."! </p> ";
				}
				}
			else{
				if($_SESSION['utilizator'] == 0)
				{
					header("location: index.php");
				}
				}   
	   
			
				}


			// if session is Not set
		if(!isset($_SESSION['utilizator']))
			{
			header("location:index.php");
			}
			?>
			<form id="search">
			<input type="text" name="search" tabindex="1">
			</form>
			
			
		</div>
		<div id="navbar1">
			<?php include "meniu.php"; ?>
		</div>
		
		<div id="content">
			
			<h1>Edit Products</h1><hr>
			
				
				
				<form id="store" method="POST" action="update.php">
				<?php
				
				$id=$_GET['idu'];
				$sql2="SELECT * FROM produs WHERE id=$id";
				$rez=mysqli_query($conn,$sql2);
				$row3 = mysqli_fetch_array($rez); 
					
					/*echo "	<input type=hidden name=idu value='".$row3['id']."'><br>
						    <input type=text name=prname value='".$row3['nume']."'><br>
							<input type=text name=descr value='".$row3['descriere']."'><br>
							<input type=number min=1 name=cantit value='".$row3['cantitate']."'><br>
							<input type=number min=10 name=pret value='".$row3['pret']."'><br>
							<button type=submit name=up>Update</button>
							<button type=reset name=up>Reset</button>";*/
							 
					
				
				?>	
				
				<form id="store" method="POST" action="update.php" enctype="multipart/form-data">
				<input type=hidden name=idu value="<?php echo $row3['id']?>"><br>
				<label>Product Name</label><br>
				<input type=text name=prname value="<?php echo $row3['nume']?>"><br>
				<label>Description</label><br>
				<input type=text name=descr value="<?php echo $row3['descriere']?>"><br>
				<label>Amount</label><br>
				<input type=number min=1 name=cantit value="<?php echo $row3['cantitate']?>"><br>
				<label>Price</label><br>
				<input type=number min=10 name=pret value="<?php echo $row3['pret']?>"><br>				
				<div>
				<button type=submit name=up>Update</button>
				<button type=reset name=reset>Reset</button>
				</div>
				</form>
				
		
				
				
			
			
						
		</div>
		<div id="footer">
		<p class="col-md-6"><a href="index.html">CV</a></p>
		<p class="col-md-6"><a href="http://csac.ulbsibiu.ro/">CSAC</a></p>
		</div>
	</div>
</body>
