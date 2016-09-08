<?php

	include "connect.php";
        $a=$_POST['prname'];
		$b=$_POST['descr'];
		$c=$_POST['cantit'];
		$d=$_POST['pret'];
		$e=$_POST['idu'];
		
	
	$sql="UPDATE produs SET nume='$a',descriere='$b',cantitate='$c',pret='$d' WHERE id='$e'";
	
	$rez=mysqli_query($conn,$sql);
	if($rez)
		header("location:store.php");
	else
		echo"Problema la ...";
	
    
	
 ?>