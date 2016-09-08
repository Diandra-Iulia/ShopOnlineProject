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
			//echo" <a href=login.php>Inreagistreaza-te</a>";
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
			<div id="edit1">
			<h1>Show Clients</h1><hr>
			<table>
			<tr><td>Index</td>
				<td>Last Name</td>
				<td>First Name</td>
				<td>Adress</td>
				<td>Phone number</td>
				<td>Delete</td>
			</tr>
			<?php
			include "connect.php";
			$sql="SELECT * FROM utilizator WHERE admin=0";
			$rez=mysqli_query($conn,$sql);
			$i=1;
			while($row = mysqli_fetch_array($rez)){ 
			echo "<tr><td><input type=hidden name=idu value='".$row['id']."'>".$i."</td>
					  <td>".$row['nume']."</td>
					  <td>".$row['prenume']."</td>
					  <td>".$row['adresa']."</td>
				 	  <td>".$row['telefon']."</td>
					  <td><a href=deleteutil.php?idu=".$row['id'].">Delete</a></td></tr>";
					
			$i++;
			}
			?>
			</table>
			</div>
		</div>
		
	</div>
</body>
