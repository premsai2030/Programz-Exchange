<?php 
session_start();
$username=$_SESSION["username"];
if($username==true){

}
else
{
	header('location:http://localhost/programz-website/');
	session_destroy();
}
$db=mysqli_connect('localhost','root','','programz_exchange');

?>