<?php 
session_start();
$db=mysqli_connect('localhost','root','','prem');


	$id=$_GET["id"];
	echo $id;
	$sql="DELETE FROM article WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header("location: http://localhost/programz/ARTICLES/") ;
}
else{
	echo "some problem has occured";
}



 ?>