<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
	$id=$_GET["id"];
	echo $id;
	$sql="DELETE FROM article WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location:'.$main_url."HOME/ARTICLES");
}
else{
	echo "some problem has occured";
}



 ?>