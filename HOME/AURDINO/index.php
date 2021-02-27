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
$sql="SELECT * FROM create_questions WHERE category='AURDINO' ORDER BY id DESC";
$result=mysqli_query($db,$sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Login page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <img src="logo.jpeg" alt="Logo" style="width:290px;height:80px;object-fit:contain;">

    </center>
  </div>
  <div class="col-sm-6 ">
    <a href="http://programz-exchange.epizy.com/HOME/" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;margin-left:30px;color: white;">Home</a>
<a href="http://programz-exchange.epizy.com/HOME/PUBLIC/" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">
Public</a>
<a  href="http://programz-exchange.epizy.com/HOME/PRIVATE/" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">
Private</a>
                      <a href="http://programz-exchange.epizy.com/LOGOUT" id="close" class="navbar-brand" style="margin-top: 20px;font-size: 17px;color: white;">Logout
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
  <div class="container">
<?php 
while ($row=mysqli_fetch_assoc($result)) {
 ?>


<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
 
  <div class="card" style="margin-top: 5px;" >

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3" style="background-color: white">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#<?php echo $row["id"]; ?>"
        aria-expanded="false" aria-controls="collapseThree3" style="text-decoration: none;">
        <p class="mb-0"  style="color: blue"><b>
        <?php echo str_replace("\n","<br>",$row["title"]); ?>
</b>
        </p>

      </a>
<div style="margin-top: 10px;">
        
<center>
        <span ><span style="float: left;"><b>From :</b> <?php echo $row["username"]; ?></span><a style="float:right;font-size: 25px;" class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#links<?php echo $row["id"]; ?>"
	aria-expanded="false" aria-controls="collapseThree3"   ><i class="fa fa-share-alt" aria-hidden="true"></i>
	</a></span>
</center>
</div>
    </div>
<div id="links<?php echo $row["id"]; ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">

<a href=<?php echo "whatsapp://send?text=http://programz-exchange.epizy.com/share.php?id=".$row["id"].""; ?>  class="fa fa-whatsapp" style="color:green" id="fa1"></a>
<a href=<?php echo "tg://msg_url?url=http://programz-exchange.epizy.com/share.php?id=".$row["id"]."" ; ?> class="fa fa-telegram" id="fa1" ></a>


	</div>
  </div>
    <!-- Card body -->
    <div id="<?php echo $row["id"]; ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
<p><?php echo str_replace("\n","<br>",$row["description"]);
 ?></p>
              <textarea  rows="
              <?php
              $rows= substr_count($row["source_code"],"\n") +2;
              echo $rows ;
              ?>
              " style=" resize: none; width: 100%;" disabled="" >
<?php echo $row["source_code"]; ?>
    </textarea>
  <center>
    <span> <b>posted on : </b><?php echo $row["time1"]; ?></span>
    </center>
      </div>
   

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->

    </div>
    <!-----------------------------------------while has to end here ------------------------------------->
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
  <a href="http://programz-exchange.epizy.com/HOME/"  class="navbar-brand" style="color: white;font-size: 15px;">
Home</a>
</center>   </div>
    <div class="col-3">
<center>
<a href="http://programz-exchange.epizy.com/HOME/PUBLIC/"  class="navbar-brand" style="color: white;font-size: 15px;">
Public</a>
</center>

    </div>
        <div class="col-3">
<center>
<a  href="http://programz-exchange.epizy.com/HOME/PRIVATE/"  class="navbar-brand" style="color: white;font-size: 15px;">
Private</a>
</center>

    </div>
        <div class="col-3">
<center>
<a href="http://programz-exchange.epizy.com/LOGOUT" class="navbar-brand" style="color: white;font-size: 15px;">Logout
</a>
</center>

    </div>
  </div>
</nav>
</div>

 </body>
 </html>