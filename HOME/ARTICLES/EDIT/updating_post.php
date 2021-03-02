<?php
session_start() ;
$db = mysqli_connect("localhost","root","","prem") ;
if($_POST["submit"])
{
	echo "ght";
    $id = $_SESSION["id"] ; 
    $title = $_POST["title"] ;
    $write_ = $_POST["write"] ;
    $preview = $_POST["preview"] ;
    $sql = "UPDATE article SET Title='$title', write_='$write_', preview='$preview' WHERE id = $id " ;
    if(mysqli_query($db,$sql)) 
	{
		header("location: http://localhost/programz/ARTICLES/") ;
		unset($_SESSION["id"]) ;
	}
	else{
		echo $_SESSION["id"] ;
	}
}
?>