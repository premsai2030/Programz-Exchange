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
 		<title>Home page</title>
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
     .card
{
    margin-top: 10px;
}

.card:hover
{
    box-shadow: 5px 5px 15px grey;
}

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
        <div class="col-sm-3">
            <div class="card">
                    <center>
                        <a href="http://programz-exchange.epizy.com/HOME/PUBLIC">
                            <img src="http://programz-exchange.epizy.com/public.jpeg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Public</b></p>
                    </center>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <center>
                        <a href="http://programz-exchange.epizy.com/HOME/PRIVATE">
                            <img src="http://programz-exchange.epizy.com/private.jpeg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Private</b></p>
                    </center>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <center>
                        <a href="http://programz-exchange.epizy.com/HOME/JAVA">
                            <img src="http://programz-exchange.epizy.com/java.jpeg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Java</b></p>
                    </center>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <center>
                        <a href="http://programz-exchange.epizy.com/HOME/PYTHON">
                            <img src="http://programz-exchange.epizy.com/python.jpeg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Python</b></p>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                        <center>
                            <a href="http://programz-exchange.epizy.com/HOME/ARDUINO">
                                <img src="http://programz-exchange.epizy.com/aurdino.jpeg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Arduino</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="http://programz-exchange.epizy.com/HOME/RASPBERRY">
                                <img src="http://programz-exchange.epizy.com/rasberry.jpeg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Raspberry Pi</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="http://programz-exchange.epizy.com/HOME/BASIC C">
                                <img src="http://programz-exchange.epizy.com/c.jpeg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Basic-C</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="http://programz-exchange.epizy.com/HOME/C++">
                                <img src="http://programz-exchange.epizy.com/cpp.jpeg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>CPP</b></p>
                        </center>
                    </div>
                </div>
            </div>
                  <div class="row">
        <div class="col-sm-3">
            <div class="card" >
                    <center>
                        <a href="http://programz-exchange.epizy.com/HOME/Front End">
                            <img src="http://programz-exchange.epizy.com/front.png" style="margin: 30px 0px;width:150px;">
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Front end</b></p>
                    </center>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <center>
                        <a href="http://programz-exchange.epizy.com/HOME/Back End">
                            <img src="rev.png" style="margin: 10px;height:100px;width:120px;"">
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Back End</b></p>
                    </center>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <center>
                        <a href="#">
                            <img src="http://programz-exchange.epizy.com/art.jpeg" style="margin: 10px;width:150px;height:100px;">
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Articles</b></p>
                    </center>
                </div>
            </div>

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