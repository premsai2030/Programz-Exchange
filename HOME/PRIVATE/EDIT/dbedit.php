<!------------------------------------database for updating the created room------------------>
<?php 
error_reporting(0);
session_start();
$db=mysqli_connect('localhost','root','premsai2030','programz_exchange');

if (isset($_POST["submit"])) {
	date_default_timezone_set('Asia/Kolkata');
	$id=$_POST["id"];
	$username=$_SESSION["username"];
	$pass=$_POST["pass"];
	$title=$_POST["title"];
	$description=$_POST["description"];
	$category=$_POST["category"];
	$source_code=$_POST["source_code"];
	$time1=date("d-m-y");
	$sql="UPDATE create_room SET username='$username',pass='$pass',title='$title',description='$description',category='$category',source_code='$source_code',updated_time='$time1' WHERE id='$id' ";
if (mysqli_query($db,$sql)) {
	header('location :http://localhost/programz-website/HOME/PUBLIC/');
}
else{
	echo "some problem has occured";
}
}
