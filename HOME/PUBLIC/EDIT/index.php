
 <?php 
session_start();
$username=$_SESSION["username"];
if($username==true){

}
else
{
	header('location:http://localhost/programz-website/');
}
$db=mysqli_connect('localhost','root','premsai2030','programz_exchange');
$id=$_GET["id"];
$sql="SELECT * FROM create_questions WHERE id='$id' ";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Login page</title>
    <script src="jquery-3.5.1.min.js"></script>

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
  <br><br>
  <nav class="navbar-nav fixed-top" style="background-color: black;"> 

  <div class="row">
  <div class="col-sm-3">
    <center>
                <img src="logo.jpeg" alt="Logo" style="width:290px;height:80px;object-fit:contain;">

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
if($hour>=22 && $hour<04){
  echo "It's Already Night";
}
elseif($hour>=04 && $hour<12){
  echo "Good Morning";
}
elseif($hour>=12 && $hour<17){
  echo "Good Afternoon";
}
elseif($hour>=17 ){
  echo "Good Evening";
}


         ?>
    </a>
  </div>
  </div>    
  </nav>
 	<br><br>
 <div class="container">
 <div class="row">
<div class="col-lg-2">
  
</div>
<div class="col-lg-8">
  <form action="updating_post.php" method="post">
    <label ><b><h4>TITLE :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Title " name="title" ><?php echo $row["title"]; ?></textarea>
</div>
  <label ><b><h4>Description :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Description " name="description" required=""><?php echo $row["description"]; ?></textarea>
</div>
 <label ><b><h4>Select Language :</h4></b></label>
<div class="form-group">
  <select class="form-control" id="exampleFormControlSelect1" name="category" >
          <option><?php echo $row["category"]; ?></option>
      <option>JAVA</option>
      <option>PYTHON</option>
      <option>BASIC C</option>
      <option>C++</option>
      <option>AURDINO</option>
      <option>RASPBERRY</option>
      </select>
  </div>
 <label ><b><h4>Source Code :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="10" placeholder="Source code" name="source_code" required=""><?php echo $row["source_code"]; ?></textarea>
</div>
<input type="text" name="id" hidden="" value="<?php echo $row["id"]; ?>">
<center><button type="subimit" name="submit" class="btn btn-success">Update</button></center>
</form>
</div>
<div class="col-lg-2">
  
</div>
<!---------------------------------------------------row ends------------------------------------------------------->
 </div>
 
</div>
<br><br><br><br>
<div id="open">
  <nav class="navbar-nav fixed-bottom" style="background-color: black">
  <div class="row" style="padding: 10px;">
    <div class="col-3">
<center>
  <a href="http://localhost/programz-website/HOME"  class="navbar-brand" style="color: white;font-size: 15px;">
Home</a>
</center>   </div>
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
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("button").onclick(function(){
   $("#description").toggle();
  });
});
</script>
 </body>
 </html>