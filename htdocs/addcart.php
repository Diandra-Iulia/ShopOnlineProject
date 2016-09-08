<?php
	include "connect.php";
	session_start();
	
	$idcategorie=$_GET['idc'];
	$idprod=$_GET['idu'];
/*	if(isset($_SESSION['utilizator'])){
		$sql2="SELECT cantitate FROM produs WHERE id=$idprod";
		$rez2=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($rez2);
		$row-=1;
		
	}*/
	if(isset($_SESSION['idutilizator'])){
		
		
		$idutilizator=$_SESSION['idutilizator'];
		$sql="INSERT INTO cos(idutilizator, idprodus) VALUES ('$idutilizator','$idprod')";
		$rez=mysqli_query($conn,$sql);
		if($rez){
			if($idprod == 0 || $idprod == NULL)
				header("location:index.php");
			else{
				header("location:produse.php?idul=$idcategorie");
			}
		}
			
		else{
			echo"Nasol";
		}

		
	}
	else{ 
	 echo "Nu e setata sesiunea";
	 header("location:login.php");
	}
	
	
	
	
?>