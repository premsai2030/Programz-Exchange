<?php 
include '../connection/db.php';
include '../connection/all_data.php' ;
if (isset($_POST["submit"])) {
	date_default_timezone_set('Asia/Kolkata');
	$username=$_SESSION["username"];
	echo $username;
	$title=$_POST["title"];
	$description=$_POST["description"];
	$category=$_POST["category"];
	$source_code=$_POST["source_code"];
	$time1=date("d-m-y");
	$sql="UPDATE create_room SET description='$description',category='$category',source_code='$source_code',time1='$time1' WHERE username='$username' AND title='$title' ";
		$sql1="INSERT INTO enter_room(username,title1,description,category,source_code,time1) VALUES('$username','$title','$description','$category','$source_code','$time1')";
if (mysqli_query($db,$sql) && mysqli_query($db,$sql1)) {
	header('location:'.$private_url);
}
else{
	echo "some problem has occured";
}
}


 ?>