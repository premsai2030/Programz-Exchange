<?php 
include '../connection/db.php';
include '../connection/all_data.php' ;
$sql="SELECT * FROM create_questions WHERE username='$username' ORDER BY id DESC";
$result=mysqli_query($db,$sql);

include '../Navbars/headers.php' ;

?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	<br><br><br><br>
 	<div class="container">
 		
 		<div class="card" style="padding: 10px;margin-bottom: 10px;">
 			<center><a href="question.php" style="text-decoration: none;"><span><i class="fa fa-plus"></i></span> <span style="font-size: 20px;">Publish</span></a></center>
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
        <p class="mb-0"  style="color: blue"><b>
        <?php echo str_replace("\n","<br>",$row["title"]); ?>
</b>
        </p>

      </a>
<div style="margin-top: 10px;">
	      
<center>
	<span ><span><a href="http://programz-exchange.epizy.com/HOME/<?php echo $row["category"]; ?>/"  class="btn btn-success" style="margin-left: 10px;font-size: 13px;"><?php echo $row["category"]; ?></a></span><a style="float:right;font-size: 25px;" class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#links<?php echo $row["id"]; ?>"
	aria-expanded="false" aria-controls="collapseThree3"   ><i class="fa fa-share-alt" aria-hidden="true"></i>
	</a></span>
</center>
</div>
    </div>
    <div id="links<?php echo $row["id"]; ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
      <?php
$link = "http://localhost/programz-exchange/share.php?id=".$row["username"]."-".$row["id"]."fhighfignKJBHUVFdfasbgji65f98h7h844JFHSYUGFUS" ;
?>
<a href=<?php echo "whatsapp://send?text=http://programz-exchange.epizy.com/share.php?id=".$row["id"].""; ?>  class="fa fa-whatsapp" style="color:green" id="fa1"></a>
<a href=<?php echo "tg://msg_url?url=http://programz-exchange.epizy.com/share.php?id=".$row["id"]."" ; ?> class="fa fa-telegram" id="fa1" ></a>
<a href="<?php echo $link; ?>"style="font-size:20px;margin-left:20px;" target="_blank" ><span class="glyphicon glyphicon-new-window"></span></a>

	</div>
  </div>
    <!-- Card body -->
    <div id="<?php echo $row["id"]; ?>" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
<p><?php echo str_replace("\n","<br>",$row["description"]); ?></p>
              <textarea  rows="
              <?php
              $rows= substr_count($row["source_code"],"\n") +2;
              echo $rows ;
              ?>
              " style=" resize: none; width: 100%;"  id="code<?php echo $row["id"]; ?>">
<?php echo $row["source_code"]; ?>
    </textarea>
 		<center>
 			<div style="padding: 10px;">
 					<a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary" style="width: 60px;margin-right: 30px;font-size: 13px">Edit</a>
 			<a href="post_delete.php?id=<?php echo $row["id"]; ?>&location=<?php echo "http://programz-exchange.epizy.com/HOME/PUBLIC/"; ?>" class="btn btn-danger" style="font-size: 13px;">Delete</a>

 			</div>
 	
 		<span><b>posted on : </b><?php echo $row["time1"]; ?></span>
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
   <script>
     const scroller = document.body ;
     scroller.onscroll = () =>{
       console.log(scroller.scrollHeight);
     }
  const copy_code = (val) => 
  {
   document.getElementById("code166").select();
   document.execCommand("copy");
   alert("Copied the text: " + val);
  }
</script>
<!-----------------------------------------------------------------------navbar for mobile phones------------------------------------>
<?php

include '../Navbars/footer.php';
?>