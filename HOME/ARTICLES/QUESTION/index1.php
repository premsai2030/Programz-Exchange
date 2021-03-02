<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <center><h1>You Create, We Store</h1></center> 
            </div>

            <div class="col-md-3"></div>

        </div>
<br>
<center><p style="color:grey;">Tags :- [h1,h2,h3,h4,h5,h6] - Heading   ,   [p] - Paragrafh   ,  [cen] - Center , [b] - Bold , [i] - Italic </p></center>
<br>
<div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="dbcreate_article.php" method="post"> 
                <label ><b><h4>TITLE :</h4></b></label>
  <div class="input-group mb-3">
<textarea class="form-control" style="resize: both; " rows="3" placeholder="Title " name="title" ></textarea>
</div>
<br>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#write" role="tab" aria-controls="write" aria-selected="true">Write</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#preview" role="tab" aria-controls="preview" aria-selected="false" onclick="" >Preview</a>
                    </li>
                    <button type="submit" class="btn btn-info" value="submit" name="submit" style="margin-left:20px;float:right;"  onclick="return clear_data() ;">Submit</button>
                  </ul>
                  
                  <br>
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="write" role="tabpanel" aria-labelledby="home-tab">
                        <textarea style="width:100%" class="form-control" rows="25" id = "write_part" name="write" >
    
                        </textarea>
                    </div>

                    <div class="tab-pane fade" id="preview" role="tabpanel" aria-labelledby="profile-tab">
                        <div id="see_preview" >
                            
                        </div>
                    </div>
                    
                    
                  </div>
                  <input value="" id="see_preview1" type="text" hidden="" name="preview" >
                </form>
                  
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    
    <br><br>

    <script src="editor.js" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>