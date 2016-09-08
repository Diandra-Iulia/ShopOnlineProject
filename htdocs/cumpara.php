<?php
	include"connect.php";
	session_start();
	if(!isset($_SESSION['idutilizator']))
		header("location:login.php");
	else{
		$idutilizator=$_SESSION['idutilizator'];
		$sql="DELETE FROM cos WHERE idutilizator='$idutilizator'";
		//echo "$sql";
		//die();
		$rez=mysqli_query($conn,$sql);
			if($rez)
				header("location:login.php");
			else
				echo"Nasol";
	}
	
?>