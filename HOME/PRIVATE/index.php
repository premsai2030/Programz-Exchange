<!-----------------------------------------------private page------------------->

<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
$words=$_GET["words"];
if ($words=="wrong") {
   
    if($_SESSION["p"])
    {
     echo "<script>alert('username or password is incorrect !! ')</script> " ; 
     unset($_SESSION["p"]) ;
    }
    
}

$sql="SELECT *FROM create_room WHERE username='$username' ORDER BY id DESC ";
$result=mysqli_query($db,$sql);
$num=mysqli_num_rows($result);

include '../Navbars/headers.php' ;
 ?>
 
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
<?php

include '../Navbars/footer.php' ;
?>
