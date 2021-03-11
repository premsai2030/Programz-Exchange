<?php 

include '../connection/db.php' ;
	$id=$_GET["id"];
	echo $id;
	$sql="DELETE FROM create_room WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location :http://localhost/programz-exchange/HOME/PRIVATE/');
}
else{
	echo "some problem has occured";
}


 ?>