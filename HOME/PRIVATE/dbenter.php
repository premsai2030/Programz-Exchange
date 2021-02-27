<?php 
session_start();
error_reporting(0);
$db=mysqli_connect('localhost','root','premsai2030','programz_exchange');
if (isset($_POST["enter"])) {
	$title=$_POST["title"];
	$pass=$_POST["pass"];
	$sql="SELECT * FROM create_room WHERE title='$title' AND pass='$pass' LIMIT 1";
	$res=mysqli_query($db,$sql);
	$row=mysqli_fetch_assoc($res);
	$num=mysqli_num_rows($res);
	if ($num==1) {
		
		header("location: ENTER?title=".$title."&pass=".$pass);
	}
	else{
		header('location:http://localhost/programz-website/HOME/PRIVATE/?words=wrong');

	}
	


}




 ?>