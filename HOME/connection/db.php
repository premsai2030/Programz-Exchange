<?php 
session_start();
error_reporting(0);
$username=$_SESSION["username"];
if($username==true){

}
else
{
	header('location:http://localhost/programz-website/');
	session_destroy();
	//echo $_SESSION["username"] ;
}
$db=mysqli_connect('localhost','root','','programz_exchange');

?>