 <?php
 
include "connect.php";
session_start();
$user = $_POST['email'];
$password = $_POST['pass'];

	
$sql = "SELECT admin FROM utilizator WHERE username='".$user."' AND password='".$password."'";
$sql1 = "SELECT id FROM utilizator WHERE username='".$user."' AND password='".$password."'";
$sql2 = "SELECT nume, prenume FROM utilizator WHERE username='".$user."' AND password='".$password."'";


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

//$result = $conn->query($sql);
$result = mysqli_query($conn,$sql);

//if ($result->num_rows > 0) {
    // 
   // while($row = $result->fetch_assoc()) {
	   while($row = mysqli_fetch_array($result)) {
		if($row["admin"] == 1){
			 $_SESSION['utilizator'] = 1;
		//	echo "Esti admin"; //redirect
			header("Location: adminpage.php");
			
		}
		else{
			$_SESSION['utilizator'] = 0;
		//	echo "Esti utilizator";
			header("Location: index.php");
		}
       // echo "Username:   " . $row["username"]. " Password: " . $row["password"]. " Admin: " . $row["admin"]. "<br>";
    }
/*} else {
    echo "0 results";
}*/

//$conn->close();	

 ?> 