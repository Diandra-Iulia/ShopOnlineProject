<?php
if(!isset($_GET['idul']))
	header("location:cart.php");
else{
	$id=$_GET['idul'];
	include "connect.php";
	$sql="DELETE FROM cos WHERE id='$id'";
	//echo "$sql";
	//die();
	$rez=mysqli_query($conn,$sql);
	if($rez)
		header("location:cart.php");
	else
		echo"Nasol";
	
}
?>