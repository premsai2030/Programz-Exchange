<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testing page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <center>
          <h1>You Create, We Store</h1>
        </center>
      </div>

      <div class="col-md-3"></div>

    </div>
    <br>
    <center>
      <p style="color:grey;">[h1,h2,h3,h4,h5,h6] - Heading Tags , [p] - Paragrah Tag , [cen] - Center Tag</p>
    </center>
    <br>
    
      
   <form action="dbcreate_article.php" method="post">
   
   <div class="row">
   <div class="col-md-3"></div>
   <div class="col-md-6">
     <label>Title :</label>
     <textarea class="form-control" name="title" >
       
     </textarea>
   </div>
   <div class="col-md-3"></div>


    </div>

<br>
    <div class="row">
<div class="col-md-6">
  <textarea class="form-control" id = "write_part" name="write"  rows="20"></textarea>
</div>
<div class="col-md-6">
<div style="overflow:auto;border-color:pink;border-style:solid;border-width:1px;padding:10px;">
<div id="see_preview" style="overflow:auto;height:500px;" >

</div>
</div>
  
</div>
<input value="" id="see_preview1" type="text" hidden="" name="preview" >
    </div>
<br><br>
    <center><button  type="submit"  class="btn btn-success" onclick="return clear_data();" name="submit" value="submit" ><i class="fa fa-plus" style="font-size:15px;"></i> Publish </button></center>
   <br><br><br>
   </form>
    

    

  </div>

  <br><br>

  <script src="editor.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>