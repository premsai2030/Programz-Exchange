<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
$json = file_get_contents('php://input');
$prem = json_decode($json, true) ;
$sql1='SELECT *FROM chit_chat WHERE get_id='.$prem["get_id"].' ORDER BY id DESC ';
$res1=mysqli_query($db,$sql1);
echo json_encode(mysqli_fetch_all($res1));
// echo json_encode($prem);
 ?>