<?php 
session_start();
$username=$_SESSION["username"];
if($username==true){

}
else
{
	header('location:http://programz-exchange.epizy.com/');
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
    <div class="col-sm-4">
     <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="public.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">PUBLIC</h5>
    <p class="card-text">Here you can see all programs of your's and you can post your own programs of any programming language .</p>
    <a href="PUBLIC" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="margin-top: 10px;">
        <br>
  <img class="card-img-top" src="private.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="margin-top: 10px;">PRIVATE</h5>
    <p class="card-text">Here you can create your own private rooms for chit - chat or for feedback rooms .</p>
    <a href="PRIVATE" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="http://programz-exchange.epizy.com/java.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">JAVA</h5>
    <p class="card-text">Whoever published programs on <b>Java</b> will be appearing here .</p>
    <a href="JAVA" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
  </div>
  <!----------------------------------------------------------------row2------------------------>
  <div class="row">
    <div class="col-sm-4">
     <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="http://programz-exchange.epizy.com/python.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">PYTHON</h5>
    <p class="card-text">Whoever published programs on <b>Python</b> will be appearing here .</p>
    <a href="PYTHON" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="http://programz-exchange.epizy.com/aurdino.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="margin-top: 10px;">AURDINO</h5>
    <p class="card-text">Whoever published programs on <b>Aurdino</b> will be appearing here .</p>
    <a href="AURDINO" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="http://programz-exchange.epizy.com/rasberry.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">RASPBERRY PI</h5>
    <p class="card-text">Whoever published programs on  <b>Raspberry PI</b> will be appearing here .</p>
    <a href="RASPBERRY" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
  </div>
  <!--row3-->
  <div class="row">
    <div class="col-sm-4">
     <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="http://programz-exchange.epizy.com/c.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">C PROGRAMMING</h5>
    <p class="card-text">Whoever published programs on <b>C Programming</b> will be appearing here .</p>
    <a href="BASIC C" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="http://programz-exchange.epizy.com/cpp.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="margin-top: 10px;">CPP PROGRAMMING</h5>
    <p class="card-text">Whoever published programs on <b>CPP Programming</b> will be appearing here .</p>
    <a href="C++" class="btn btn-primary">Click Here</a>
  </div>
</div>
    </div>
    <!--
    <div class="col-sm-4">
      <div class="card" style="margin-top: 10px;">
  <img class="card-img-top" src="java.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">JAVA</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>-->
  </div>
  <div class="row" style="margin-top: 20px;">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
              <center><a href="http://programz-exchange.epizy.com/LOGOUT" class="btn  btn-outline-primary waves-effect" style="margin-right: 30px;width: 150px;margin-bottom: 20px;">LOG OUT</a></center>  
    </div>
    <div class="col-sm-3">
    </div>
  </div>
 </div>
 </body>
 </html>