<?php
if(!isset($_GET['idu']))
	header("location:store.php");
else{
	$id=$_GET['idu'];
	include "connect.php";
	$sql="DELETE FROM utilizator WHERE id='$id'";
	//echo "$sql";
	//die();
	$rez=mysqli_query($conn,$sql);
	if($rez)
		header("location:clients.php");
	else
		echo"Nasol";
	
}
?>