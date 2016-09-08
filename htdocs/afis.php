
				<?php 
				include "connect.php";
				session_start();
				require_once("connect.php");

				
					$a=$_POST['lname'];
					$b=$_POST['fname'];
					$c=$_POST['email'];
					$d=$_POST['pass'];
					
					$query = ( "INSERT INTO utilizator (nume, prenume, username, password) VALUES ('$a' , '$b', '$c', '$d')");
					mysqli_query($conn,$query);
					$sql1 = "SELECT id FROM utilizator WHERE username='".$c."' AND password='".$d."'";
					$sql2 = "SELECT nume, prenume FROM utilizator WHERE username='".$c."' AND password='".$d."'";

					
					$rez1=mysqli_query($conn,$sql1);
					$row1=mysqli_fetch_array($rez1);

					$_SESSION['idutilizator']=$row1['id'];
//echo $_SESSION['idutilizator'];
//die();

					$rez2=mysqli_query($conn,$sql2);
					$row2=mysqli_fetch_array($rez2);

					$_SESSION['nume']=$row2['nume']." ".$row2['prenume'];
//echo $_SESSION['nume'];
//die();
					$_SESSION['utilizator']=0;
					if(isset($_SESSION['utilizator'])){
						header("location:index.php");
					}
	

				$conn->close();	

					

				?>
				
