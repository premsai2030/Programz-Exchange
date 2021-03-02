<?php
$db = mysqli_connect("localhost","root","","prem") ;
if($_POST["submit"])
{
    echo "mnvjdfn" ;
    $title = $_POST["title"] ;
    $write_ = $_POST["write"] ;
    $preview = $_POST["preview"] ;
	$time_ = date("d-m-y") ;
    $sql = "INSERT INTO article(title,write_,preview,time1) VALUES('$title','$write_','$preview','$time_') " ;
    if(mysqli_query($db,$sql)) header("location: http://localhost/programz/ARTICLES/") ;
}
?>