<!-----------------------------------------------private page------------------->

<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
$words=$_GET["words"];
if ($words=="wrong") {
    echo "<script>alert('You Entered Wrong Username or Password')</script>";

}
$sql="SELECT *FROM create_room WHERE username='$username' ORDER BY id DESC ";
$result=mysqli_query($db,$sql);
$num=mysqli_num_rows($result);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 		 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 		<title>Login page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
 <body>
 	<style type="text/css">
 	
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
 			 			    <img src="<?php echo $image_link; ?>logo.jpeg" alt="Logo" style="width:290px;height:80px;object-fit:contain;">

 		</center>
 	</div>
 	<div class="col-sm-6 ">
 		<a href="http://localhost/programz-website/HOME" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;margin-left:30px;color: white;">Home</a>
<a href="http://localhost/programz-website/HOME/PUBLIC/" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">
Public</a>
<a  href="http://localhost/programz-website/HOME/PRIVATE/" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">
Private</a>
 		 			 						<a href="http://localhost/programz-website/LOGOUT" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">Logout
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
 	<br><br><br><br>
<!--------------------------------------------------------------container starts-------------------------->
<div class="container">
 		<div class="row">
 			<div class="col-sm-6">
 				<div class="card" style="padding: 10px;margin-bottom: 10px;">
 			<center><a href="http://localhost/programz-exchange/HOME/PRIVATE/create.php"  style="text-decoration: none;"><span><i class="fa fa-plus"></i></span> <span style="font-size: 20px;">Create A Room</span></a></center>
 		</div>
 			</div>
 			<div class="col-sm-6">
 					<div class="card" style="padding: 10px;margin-bottom: 10px;">
 			<center><a href="#enter" data-toggle="collapse"  style="text-decoration: none;"> <span style="font-size: 20px;">Enter Into Room</span></a></center>
 		</div>
 		</div>
 			</div>
 	
   <!---------------------------------------enter into room----------------->
   <div id="enter" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
   <div class="container">
   	<form action="dbenter.php" method="post" >
   	<div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control" placeholder="Title of the Project" aria-label="Username" aria-describedby="basic-addon1" required="" name="title" >
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control"  placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required="" name="pass" >
</div>

<center>
      <button type="submit" class="btn btn-primary " name="enter"  >Enter</button>
</center>	
   	</form>

   	<hr>
   </div>

  </div>
 	<?php 
 while ($row=mysqli_fetch_assoc($result)) {
   


   ?>	
    <div class="card" style="padding: 10px;margin-bottom: 10px;">
      <a href="enter.php?title=<?php echo $row["title"]; ?>&pass=<?php echo $row["pass"]; ?>"  style="text-decoration: none;color: blue;"> <span style="font-size: 20px;"><?php echo $row["title"]; ?></span></a>
      <div>
        <span><b>Password :</b> <?php echo $row["pass"]; ?></span>
        <div style="padding: 10px;"> 
          <center>          <a class="btn btn-primary" href="edit.php?id=<?php echo $row["id"]; ?>" style="color: white;margin-right: 10px;font-size: 13px;" >Edit</a><a href="dbdelete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" style="color: white;font-size: 13px;">Delete</a>
</center>
   <div id="<?php echo $row["id"]; ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree3" style="margin-top: 10px;" 
      data-parent="#accordionEx">
   <div class="container">
    <form action="dbedit.php" method="post" onsubmit="return enter1()">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control" placeholder="Title of the Project" aria-label="Username" aria-describedby="basic-addon1" required="" value="<?php echo $row["title"]; ?>" name="title" >
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control" id="updated_pass<?php echo $row["id"]; ?>" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required="" value="<?php echo $row["pass"]; ?>" name="pass" >
</div>
  <span id="display_enter<?php echo $row["id"]; ?>"></span>

<input type="text" name="id" value="<?php echo $row["id"]; ?>" hidden="">
<center>
<input type="submit" name="submit" class="btn btn-success" value="UPDATE" />
</center> 
    </form>

   </div>

  </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
      function enter1(){
        var pass=document.getElementById("updated_pass<?php echo $row["id"]; ?>").value;
        if(pass.length<5){
    document.getElementById("display_enter<?php echo $row["id"]; ?>").innerHTML="Password length should be greater than 5 and lesser than 10 characters";
          return false;

        }
        else{
          return true;
        }
      
        

      }
    </script>

 	<?php 

}
   ?>
 	</div>
 	<br><br><br>
<!-----------------------------------------------------------------------navbar for mobile phones------------------------------------>
<div id="open">
	<nav class="navbar-nav fixed-bottom" style="background-color: black">
	<div class="row" style="padding: 10px;">
		<div class="col-3">
<center>
	<a href="http://localhost/programz-website/HOME"  class="navbar-brand" style="color: white;font-size: 15px;">
Home</a>
</center>		</div>
		<div class="col-3">
<center>
<a href="http://localhost/programz-website/HOME/PUBLIC/"  class="navbar-brand" style="color: white;font-size: 15px;">
Public</a>
</center>

		</div>
				<div class="col-3">
<center>
<a  href="http://localhost/programz-website/HOME/PRIVATE/"  class="navbar-brand" style="color: white;font-size: 15px;">
Private</a>
</center>

		</div>
				<div class="col-3">
<center>
<a href="http://localhost/programz-website/LOGOUT" class="navbar-brand" style="color: white;font-size: 15px;">Logout
</a>
</center>

		</div>
	</div>
</nav>
</div>

 </body>
 </html>
