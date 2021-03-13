<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
if (isset($_POST["submit"])) {
	date_default_timezone_set('Asia/Kolkata');
	$username=$_SESSION["username"];
	$title=$_POST["title"];
	$title=str_replace("'","\'",$title);
	$description=$_POST["description"];
	$category=$_POST["category"];
	$source_code=$_POST["source_code"];
	$source_code=str_replace("'","\'",$source_code);
	$time1=date("d-m-y");
	$sql="INSERT INTO create_questions(username,title,description,category,source_code,time1,updated_time) VALUES('$username','$title','$description','$category','$source_code','$time1','')";
if (mysqli_query($db,$sql)) {
	header('location:'.$public_url);
}
else{
	echo "some problem has occured";
}
}


 ?>