<?php
include '../connection/db.php' ;
include '../connection/all_data.php' ;
$username = $_SESSION["username"];
$title = $_POST["title"] ;
$id = $_POST["id"] ;
$article = $_POST["article"];
$sql = "UPDATE article SET title = '$title', article = '$article' WHERE id = '$id' " ;
if(mysqli_query($db,$sql)) header("Location:".$main_url."/HOME/ARTICLES/") ;
else "no";

?>