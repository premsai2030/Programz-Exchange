 <?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
$where="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ;
$username=$_SESSION["username"];
$title=$_GET["title"];
$pass=$_GET["pass"];

$sql="SELECT *FROM create_room WHERE title='$title' AND pass='$pass' LIMIT 1";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
$get_id=$row["id"];
$sql1="SELECT *FROM chit_chat WHERE get_id='$get_id' ORDER BY id DESC ";
$res1=mysqli_query($db,$sql1);

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
		<nav class="nav navbar-nav justify-content-center" style="background-color:black;width: 100%;padding: 10px;">
<center>			<a class="navbar-brand" style="color: white;">Room Created By <?php echo $row["username"]; ?></a>
			<p style="font-size: 20px;color: white;">"<?php echo $title; ?>"</p>

</center>
		</nav>
		<br>
	<?php 
if ($username==$row["username"]) {


	 ?>
	<p style="text-align: center;margin-top: 5px;">If you  want edit description or source code  <a href="http://localhost/programz-website/HOME/PRIVATE/EDIT/?id=<?php echo $row["id"]; ?>" style="text-decoration: none;" >click this</a></p>
	<?php 

	} ?>
<?php 
if ($row["description"]=='' && $row["source_code"]=='') {
	?>
	<h3 style="color: grey;margin-top: 20%;">There is nothing to SHOW</h3>
	<?php 
}
else{
	if ($row["source_code"]=='') {
	?>
	<div class="card" style="width:100%;padding: 10px;border-bottom-color: blue ;border-bottom-width: 2px; ">
		<p><?php echo $row["description"]; ?></p>
	</div>
<?php }
else if($row["description"]==''){
?>
	<div class="card" style="width:100%;padding: 10px;margin-top:10px;border-bottom-color: green ;border-bottom-width: 2px; ">
		<textarea rows="20" style="border-color: white;resize: none;" disabled=""><?php echo $row["source_code"]; ?></textarea>
		
	</div>

<?php 
}

else{
	?>
	<div class="card" style="width:100%;padding: 10px;border-bottom-color: blue ;border-bottom-width: 2px; ">
		<p><?php echo $row["description"]; ?></p>
	</div>
		<div class="card" style="width:100%;padding: 10px;border-bottom-color: green ;margin-top:10px;border-bottom-width: 2px; ">
		<textarea rows="20" style="border-color: white;"><?php echo $row["source_code"]; ?></textarea>
	</div>


	<?php 
}
} ?>
<div class="card" style="width: 100%;margin-top: 20px;padding: 10px;border-bottom-color: skyblue">
	<form  action="db_after.php" method="post">
	<input type="text" name="location" value="<?php echo  $where; ?>" hidden >
	<input type="text" name="get_id" value="<?php echo  $get_id; ?>" hidden >

	<label ><b><h5>Some Description :</h5></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="chit-chat" name="description" required=""></textarea><br>
</div>
<center><button class="btn btn-success" type="submit" name="submit" >Submit</button></center>

</form>
</div>
<?php 
while ($row2=mysqli_fetch_assoc($res1)) {
?>
<div class="card" style="width: 100%;border-bottom-color: blue;padding: 10px;margin-top: 10px;"> 
	<div><h3 style="color: grey"><?php echo $row2["username"]; ?></h3></div>
	<div><p><?php echo $row2["description"]; ?></p></div>
</div>
<?php 
}

 ?>
<!-----------------------------row ends here------------------------------>
	</div>
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
