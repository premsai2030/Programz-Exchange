<!-------------------------------editing for create  room------------------------->


<?php 
include '../connection/db.php';
include '../connection/all_data.php' ;
$id=$_GET["id"];
$sql="SELECT * FROM create_room WHERE id='$id' LIMIT 1 ";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
include '../Navbars/headers.php' ;
 ?>

 	<br><br><br><br>
 <div class="container">
 <div class="row">
  <nav class="nav navbar-nav " style="background-color: black;text-align: center;width: 100%;padding: 10px;">
    <a class="navbar-brand" style="color: white">Currently You Are Editing Your Room</a>
    <a class="navbar-brand" style="color: white">" <?php echo $row["title"]; ?> " </a>
  </nav>
<div class="col-lg-2">
  
</div>
<div class="col-lg-8">
  <form action="dbedit.php" method="post">
    <label ><b><h4>TITLE :</h4></b><small>required compulsory</small></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Title " name="title"><?php echo $row["title"]; ?></textarea>
</div>
 <label ><b><h4>Password :</h4></b><small>required compulsory</small></label>
  <div class="input-group mb-3">
<input class="form-control"    placeholder="Password" name="pass"  value="<?php echo $row["pass"]; ?>" />
</div>
  <label ><b><h4>Description :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Description " name="description" ><?php echo $row["description"]; ?></textarea>
</div>

 <label ><b><h4>Source Code :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="10" placeholder="Source code" name="source_code" ><?php echo $row["source_code"]; ?></textarea>
</div>
<input type="text" name="id" value="<?php echo $id; ?>" hidden="">
<center><button type="subimit" name="submit" class="btn btn-success">Update Room</button></center>
</form>
</div>
<div class="col-lg-2">
  
</div>
<!---------------------------------------------------row ends------------------------------------------------------->
 </div>
 
</div>
<br><br><br><br>
<?php

include '../Navbars/footer.php' ;

?>