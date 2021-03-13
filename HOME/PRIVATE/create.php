<!-------------------------------private create room------------------------->


<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
include '../Navbars/headers.php' ;
 ?>

 	<br><br><br><br>
 <div class="container">
 <div class="row">
  <nav class="nav navbar-nav " style="background-color: black;text-align: center;width: 100%;padding: 10px;">
    <a class="navbar-brand" style="color: white">Currently You Are Creating A Room</a>
  </nav>
<div class="col-lg-2">
  
</div>
<div class="col-lg-8">
  <form action="dbcreate.php" method="post">
    <label ><b><h4>TITLE :</h4></b><small>required compulsory</small></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Title " name="title" required=""></textarea>
</div>
 <label ><b><h4>Password :</h4></b><small>required compulsory</small></label>
  <div class="input-group mb-3">
<input class="form-control"    placeholder="Password" name="pass" required="" />
</div>
  <label ><b><h4>Description :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Description " name="description" ></textarea>
</div>

 <label ><b><h4>Source Code :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="10" placeholder="Source code" name="source_code" ></textarea>
</div>

<center><button type="subimit" name="submit" class="btn btn-success">Create Room</button></center>
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
