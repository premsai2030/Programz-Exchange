<?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
include '../Navbars/headers.php' ;
 ?>
 
 	<br><br><br><br>
 <div class="container">
 <div class="row">
<div class="col-lg-2">
  
</div>
<div class="col-lg-8">
  <form action="dbcreate_question.php" method="post">
    <label ><b><h4>TITLE :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Title " name="title"></textarea>
</div>
  <label ><b><h4>Description :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Description " name="description" required=""></textarea>
</div>
 <label ><b><h4>Select Language :</h4></b></label>
<div><small>By Default It takes "JAVA"</small>  </div>
<div class="form-group">
  <select class="form-control" id="exampleFormControlSelect1" name="category">
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
<textarea class="form-control" style="resize: both; " rows="10" placeholder="Source code" name="source_code" required=""></textarea>
</div>

<center><button type="subimit" name="submit" class="btn btn-success">Publish</button></center>
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