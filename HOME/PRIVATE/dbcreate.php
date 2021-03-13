<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
if (isset($_POST["submit"])) {
	date_default_timezone_set('Asia/Kolkata');
	$username=$_SESSION["username"];
	$title=$_POST["title"];
	$pass=$_POST["pass"];
	$description=$_POST["description"];
	$category=$_POST["category"];
	$source_code=$_POST["source_code"];
	$time1=date("d-m-y");
	$sql="INSERT INTO create_room(username,title,pass,description,source_code,time1) VALUES('$username','$title','$pass','$description','$source_code','$time1')";
if (mysqli_query($db,$sql)) {
	header('location:'.$private_url);
}
else{
	echo "some problem has occured";
}
}


 ?>