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