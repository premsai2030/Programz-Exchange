<!-----------------------------------public page-------------------->
<?php 
include '../connection/db.php' ;
include '../Navbars/headers.php' ;
$sql="SELECT * FROM article ORDER BY id DESC";
$result=mysqli_query($db,$sql);
 ?>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
        img {
          max-height:500px;
          max-width: 100%;
        }
 	</style>
<br><br><br><br><br><br>
 	<div class="container">
 		
 		<div class="card" style="padding: 10px;margin-bottom: 10px;">
 			<center><a href="create.php" style="text-decoration: none;"><span><i class="fa fa-plus"></i></span> <span style="font-size: 20px;">Publish an Article </span></a></center>
 		</div>
 			<!--Accordion wrapper-->
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
        <h4 class="mb-0"  style="color: blue"><b>
        <?php echo str_replace("\n","<br>",$row["title"]); ?>
</b>
        </h4>

      </a>
<div style="margin-top: 10px;">
	      
<center>
	<span ><a style="float:right;font-size: 25px;" class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#links<?php echo $row["id"]; ?>"
	aria-expanded="false" aria-controls="collapseThree3"   ><i class="fa fa-share-alt" aria-hidden="true"></i>
	</a></span>
</center>
</div>
    </div>
    <div id="links<?php echo $row["id"]; ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
      <?php
$link = "http://localhost/programz-exchange/article.php?id=".$row["username"]."-".$row["id"]."fhighfignKJBHUVFdfasbgji65f98h7h844JFHSYUGFUS" ;
?>
<a href=<?php echo "whatsapp://send?text=http://programz-exchange.epizy.com/article.php?id=".$row["id"].""; ?>  class="fa fa-whatsapp" style="color:green" id="fa1"></a>
<a href=<?php echo "tg://msg_url?url=http://programz-exchange.epizy.com/article.php?id=".$row["id"]."" ; ?> class="fa fa-telegram" id="fa1" ></a>
<a href="<?php echo $link; ?>"style="font-size:20px;margin-left:20px;" target="_blank" ><span class="glyphicon glyphicon-new-window"></span></a>

	</div>
  </div>
    <!-- Card body -->
    <div id="<?php echo $row["id"]; ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
 		<center>
<?php echo str_replace("\n","<br>",$row["article"]); ?>
<hr>
 			<div style="padding: 10px;">
 					<a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary" style="width: 60px;margin-right: 30px;font-size: 13px">Edit</a>
 			<a href="delete_article.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" style="font-size: 13px;">Delete</a>

 			</div>
 	
 		<span><b>posted on : </b><?php echo $row["date_"]; ?></span>
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
<?php include '../Navbars/footer.php' ;?>
 </body>
 </html>
