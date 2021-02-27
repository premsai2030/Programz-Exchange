<?php 
session_start();
error_reporting(0);
$db=mysqli_connect('localhost','root','premsai2030','programz_exchange');
if (isset($_POST["submit"])) {
	date_default_timezone_set('Asia/Kolkata');
	$description=$_POST["description"];
	$get_id=$_POST["get_id"];
	$location=$_POST["location"];
	$username=$_SESSION["username"];
	$time=date("d-m-y");
	$sql="INSERT INTO chit_chat(username,description,time,get_id) VALUES('$username','$description','$time','$get_id') ";
if (mysqli_query($db,$sql)) {
	header('location:'.$location);
}
else{
	echo "SOME PROBLEM HAS OCCURED";
}

}


 ?>