<?php
include '../connection/db.php' ;
include '../connection/all_data.php' ;
date_default_timezone_set('Asia/Kolkata');
$username = $_SESSION["username"];
$title = $_POST["title"] ;
$article = $_POST["article"];
$date_=date("d-m-y");
$sql = "INSERT INTO article(username,title,article,date_) VALUES('$username','$title','$article','$date_')" ;
if(mysqli_query($db,$sql)) header("Location:".$main_url."/HOME/ARTICLES/") ;
else "no";

?>