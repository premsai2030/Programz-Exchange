<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
	$id=$_GET["id"];
	echo $id;
	$sql="DELETE FROM create_questions WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location:'.$public_url);
}
else{
	echo "some problem has occured";
}



 ?>