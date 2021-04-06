<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;

$json = file_get_contents('php://input');
$prem = json_decode($json, true) ;
	date_default_timezone_set('Asia/Kolkata');
	$description=$prem["chit_chat"];
	$get_id=$prem["get_id"];
	$username=$_SESSION["username"];
	$time=date("d-m-y");
	$sql="INSERT INTO chit_chat(username,description,time,get_id) VALUES('$username','$description','$time','$get_id') ";
if (mysqli_query($db,$sql)) {
	echo json_encode(array("ok"=>"done")) ;
}
else{
	echo "SOME PROBLEM HAS OCCURED";
}



 ?>