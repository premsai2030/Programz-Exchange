<?php 
include '../connection/db.php';
include '../connection/all_data.php' ;
if (isset($_POST["enter"])) {
	$title=$_POST["title"];
	$pass=$_POST["pass"];
	$sql="SELECT * FROM create_room WHERE title='$title' AND pass='$pass' LIMIT 1";
	$res=mysqli_query($db,$sql);
	$row=mysqli_fetch_assoc($res);
	$num=mysqli_num_rows($res);
	if ($num==1) {
		
		header("location: enter.php?title=".$title."&pass=".$pass);
	}
	else{
		header('location:'.$private_url.'?words=wrong');
		$_SESSION["p"] = "p" ;
	}
	


}




 ?>