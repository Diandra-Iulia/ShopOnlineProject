<?php
include "connect.php";
$categ=$_POST['cat'];
$pnume=$_POST['pname'];
$desc=$_POST['description'];
$cant=$_POST['amount'];
$pret=$_POST['price'];
//$file=$_POST['file'];


//Script pentru upload imagine
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$poza = $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Verificam daca exista poza cu acelasi nume
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}


// Verificam daca $uploadOk este setat pe 0
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



$sql="INSERT INTO produs (nume, descriere, cantitate, pret, idcategorie, poza) VALUES ('$pnume','$desc','$cant','$pret','$categ', '$poza')";
$rez=mysqli_query($conn,$sql);
if($rez){
	header("location:store.php");
}
else 
	echo "Nasol";



//
?>