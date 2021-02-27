<?php 
session_start();
$username=$_SESSION["username"];
if($username==true){

}
else
{
	header('location:http://localhost/programz-website/');
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 		<title>Login page</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
 <body>
 	<style type="text/css">
 		@media only screen and (max-width: 700px){
#close{
	display: none;
}
 		}
 	</style>
 	<nav class="navbar-nav " style="background-color: black;"> 	
 	<div class="row">
 	<div class="col-sm-3">
 	</div>
 	<div class="col-sm-6 ">
 		<center>
 			 			    <img src="logo.jpeg" alt="Logo" style="width:290px;height:80px;object-fit:contain;">

 		</center>
    
 	</div>
 		<div class="col-sm-3">
 			<a class="navbar-brand" id="close" style="float: right;color: white;margin-top: 13px;font-size: 15px;">Welcome <?php echo  $_SESSION["username"]; ?>  !<br>
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
 	<br><br>
 <div class="container">
 	<div class="row">
 		<div class="col-lg-6">
 			<center>
 				<h3>Login </h3>
 				<hr style="border-bottom: solid black;">
 				<div style="width: 100%" >
 					<a href="PUBLIC" class="btn btn-outline-danger" style="margin-bottom: 30px;">LOGIN TO MAIN PAGE</a>
 				</div>
<div style="width: 100%" >
 					<a href="PRIVATE" class="btn btn-outline-primary" style="margin-bottom: 30px;">ENTER INTO ROOM</a>
 				</div>
 			</center>
 			

 		</div>
 		<div class="col-lg-6">
 			<center>
 				<h3><span >< </span>PROGRAMS<span> /></span></h3>
 				<hr style="border-bottom: solid black;">
 				<table>
 				<tr>
 					<a href="JAVA" class="btn  btn-outline-amber waves-effect " style="margin-right: 30px;width: 150px;margin-bottom: 20px;">JAVA</a>
 				</tr>
 				<tr>
 					<a class="btn  btn-outline-elegant waves-effect" style="margin-right: 30px;width: 150px;margin-bottom: 20px;">PYTHON</a>
 				</tr>
 				
 				<tr>
 					<a class="btn  btn-outline-info waves-effect" style="margin-right: 30px;width: 150px;margin-bottom: 20px;">BASIC C</a>
 				</tr>
 				<tr>
 					<a class="btn  btn-outline-cyan waves-effect" style="margin-right: 30px;width: 150px;margin-bottom: 20px;">C ++</a>
 				</tr>
 				<tr>
 					<a class="btn  btn-outline-light-green waves-effect" style="margin-right: 30px;width: 150px;margin-bottom: 20px;">AURDINO</a>
 				</tr>
 				<tr>
 					<a class="btn  btn-outline-dark-green waves-effect" style="margin-right: 30px;width: 150px;margin-bottom: 20px;">RASPBERRY</a>
 				</tr>
 			


 			</table>
 			</center>
 		</div>
 	</div>
 	<div class="row" style="margin-top: 20px;">
 		<div class="col-sm-3">
 		</div>
 		<div class="col-sm-6">
 			 				<center><a href="http://localhost/programz-website/LOGOUT" class="btn  btn-outline-primary waves-effect" style="margin-right: 30px;width: 150px;margin-bottom: 20px;">LOG OUT</a></center>	
 		</div>
 		<div class="col-sm-3">
 		</div>
 	</div>
 </div>
 </body>
 </html>