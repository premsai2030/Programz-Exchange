<?php 
include '../connection/db.php' ;

	$id=$_GET["id"];
	echo $id;
	$sql="DELETE FROM create_questions WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location :http://localhost/programz-exchange/HOME/PUBLIC/');
}
else{
	echo "some problem has occured";
}



 ?>