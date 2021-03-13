<!------------------------------------database for updating the created room------------------>
<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
if (isset($_POST["submit"])) {
	date_default_timezone_set('Asia/Kolkata');
	$id=$_POST["id"];
	$username=$_SESSION["username"];
	$description= $_POST["description"];
	$pass=$_POST["pass"];
	$title=$_POST["title"];
	$source_code=$_POST["source_code"];
	$time1=date("d-m-y");
	$sql="UPDATE create_room SET username='$username',pass='$pass',title='$title',description='$description',source_code='$source_code',updated_time='$time1' WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location:'.$private_url);
}
else{
	echo "some problem has occured";
}
}
