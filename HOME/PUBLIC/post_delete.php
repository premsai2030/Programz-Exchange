<?php 
session_start();
$db=mysqli_connect('localhost','root','premsai2030','programz_exchange');


	$id=$_GET["id"];
	echo $id;
	$sql="DELETE FROM create_questions WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location :http://localhost/programz-website/HOME/PUBLIC/');
}
else{
	echo "some problem has occured";
}



 ?>