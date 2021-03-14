
 <?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
$id=$_GET["id"];
$sql="SELECT * FROM create_questions WHERE id='$id' ";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
 include '../Navbars/headers.php' ;
 ?>
 	<br><br><br><br>
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
      <option>Front End</option>
      <option>Back End</option>
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


<?php

include '../Navbars/footer.php' ;
?>