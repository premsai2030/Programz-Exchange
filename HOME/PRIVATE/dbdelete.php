<?php 

session_start();
error_reporting(0);
$db=mysqli_connect('localhost','root','premsai2030','programz_exchange');


	$id=$_GET["id"];
	echo $id;
	$sql="DELETE FROM create_room WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location :http://localhost/programz-website/HOME/PRIVATE/');
}
else{
	echo "some problem has occured";
}


 ?>