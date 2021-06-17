<?php
session_start();
error_reporting(0);
include './HOME/connection/db.php';
include './HOME/connection/all_data.php';
$id1 = $_GET["id"] ;
$id2 = explode("-",$id1) ;
$id3 = explode("f", $id2[1]) ;
$sql="SELECT * FROM create_questions WHERE id=".(int)$id3[0];
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$rows= substr_count($row["source_code"],"\n") +2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo $image_link ;?>logo.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Cormorant+Garamond:wght@500&family=Sacramento&family=Shadows+Into+Light&display=swap" rel="stylesheet">    <body>
    <nav class="navbar-nav " style="background-color: black;"> 	
        <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6 ">
            <center>
                                 <img src="<?php echo $image_link ;?>logo.jpeg" alt="Logo" style="width:290px;height:80px;object-fit:contain;">
   
            </center>
       
        </div>
            <div class="col-sm-3">
                
        </div>
        </div>		
   
        </nav>


<br><br>

<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
    <div>
        <h4><?php echo  str_replace("\n","<br>",$row["title"]); ?> <i class='fas fa-copy' style="color:rgba(222,23,242,0.5)" onclick="copy_code()"></i></h4>
    </div>
    <p><b><span style="color:blue">Posted By : </span></b> <?php echo  $row["username"]; ?></p>
    <p><b><span style="color:blue">Language : </span></b> <?php echo  $row["category"]; ?></p>
    <hr style="border: 1px solid black">
    <br>
    <p><?php echo  str_replace("\n","<br>",$row["description"]); ?></p>
    <textarea id="_code_" rows=<?php echo $rows;?> style=" resize: none; width: 100%;" disabled="" value="<?php echo  $row["source_code"]; ?>" ><?php echo  $row["source_code"]; ?>

    </textarea> 
    
    <br>
    <hr style="border: 1px solid red">
    
    <div>
        <span><p><b>Posted on : </b><?php echo $row["time1"];?></p></span>
    
</div>
<center>
    <h3 style="font-family: 'Bungee Outline', cursive;
    font-family: 'Cormorant Garamond', serif;
    font-family: 'Sacramento', cursive;
    font-family: 'Shadows Into Light', cursive;"><b>By BLM</b></h3>
</center>
</div>
<div class="col-md-1"></div>
</div>
</div>


<!DOCTYPE html>
<html>
<body>


</body>
</html>

<script>
  const copy_code = () => 
  {
    var code_ = document.getElementById("_code_");
code_.disabled = false;
code_.select();
code_.setSelectionRange(0, 99999); 
  document.execCommand("copy");
  code_.disabled = true;
  alert("Copied the text");
  }
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>