<?php

include '../connection/all_data.php';

?>

<!DOCTYPE html>
 <html>
 <head>
 		<title><?php echo "Page";?></title>
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="icon" href="<?php echo $image_link ;?>logo.png" type="image/icon type">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
 <body>
 	<style type="text/css">
     p img
     {
         max-width:100%;
         height:100%;
     }
 	  #fa1
{
	padding :10px;
	width: 30px;
	font-size:25px;
	margin-left: 10px;
	text-decoration: none;
}
@media screen and (min-width:990px){
#open{
display:none;
}
}
@media screen and (max-width:990px){
#close{
display:none;
}
}
@media screen and (min-width:425px){
#size{
font-size: 10px;
}
}
   @media only screen and (max-width: 700px){
#close1{
    display: none;
}



        }
 	</style>
 	<nav class="navbar-nav fixed-top" style="background-color: black;"> 

 	<div class="row">
 	<div class="col-sm-3">
 		<center>
 			 			    <img src="<?php echo $image_link ; ?>logo.jpeg" alt="Logo" style="width:290px;height:80px;object-fit:contain;">

 		</center>
 	</div>
 	<div class="col-sm-6 ">
 		<a href="<?php echo $home_url; ?>" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;margin-left:30px;color: white;">Home</a>
<a href="<?php echo $public_url; ?>" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">
Public</a>
<a  href="<?php echo $private_url; ?>" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">
Private</a>
 		 			 						<a href="<?php echo $logout; ?>" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">Logout
</a>
 		
 	</div>
 		<div class="col-sm-3">

 			<a class="navbar-brand" id="close1" style="float: right;color: white;margin-top: 13px;font-size: 15px;">Welcome <?php echo  $_SESSION["username"]; ?>  !<br>
	<?php 
date_default_timezone_set('Asia/Kolkata');
$hour=date("H");
if($hour>=17 && $hour<22){
	echo "Good Evening";
}
elseif($hour>=04 && $hour<12){
	echo "Good Morning";
}
elseif($hour>=12 && $hour<17){
	echo "Good Afternoon";
}
else{
	echo "It's Already Night";
}


 				 ?>
    </a>
 	</div>
 	</div>		
 	</nav>