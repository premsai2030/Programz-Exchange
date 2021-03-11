<?php 
include 'connection/db.php';
include 'connection/all_data.php' ;

 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>
    <link rel="icon" href="<?php echo $image_link ;?>logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
</head>

<body>
    <style type="text/css">
        .card {
            margin-top: 10px;
        }

        .card:hover {
            box-shadow: 5px 5px 15px grey;
        }

        @media only screen and (max-width: 700px) {
            #close {
                display: none;
            }
        }
    </style>
    <nav class="navbar-nav " style="background-color: black;">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 ">
                <center>
                    <img src="<?php echo $image_link ;?>logo.jpeg" alt="Logo"
                        style="width:290px;height:80px;object-fit:contain;">

                </center>

            </div>
            <div class="col-sm-3">
                <a class="navbar-brand" id="close"
                    style="float: right;color: white;margin-top: 13px;font-size: 15px;">Welcome
                    <?php echo  $_SESSION["username"]; ?> !<br>
                    <?php 
date_default_timezone_set('Asia/Kolkata');
$hour=date("H");
if($hour>=17 && $hour<22){
	echo "Good Evening";
}
elseif($hour>=04 && $hour<12){
	echo "Good Morning";
}
elseif($hour>=12 && $hour<17){
	echo "Good Afternoon";
}
else{
	echo "It's Already Night";
}


 				 ?>
                </a>
            </div>
        </div>

    </nav>
    <br><br>
    <link rel="stylesheet" href="p.css">
    <div id="blm">
        <center><p style="margin:auto;font-size:25px;" ><b>BLM</b></p></center>
    </div>
    <div id="more">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>PUBLIC">
                                <img src="<?php echo $image_link ;?>pu.jpg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style=" font-family: 'Montserrat' , sans-serif;color: blue;"><b>Public</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>PRIVATE">
                                <img src="<?php echo $image_link ;?>pr.jpg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style=" font-family: 'Montserrat' , sans-serif;color: blue;"><b>Private</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>JAVA">
                                <img src="<?php echo $image_link ;?>j.jpg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style=" font-family: 'Montserrat' , sans-serif;color: blue;"><b>Java</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>PYTHON">
                                <img src="<?php echo $image_link ;?>p.jpg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style=" font-family: 'Montserrat' , sans-serif;color: blue;"><b>Python</b></p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>ARDUINO">
                                <img src="<?php echo $image_link ;?>a.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Arduino</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>RASPBERRY">
                                <img src="<?php echo $image_link ;?>r.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Raspberry Pi</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>BASIC C">
                                <img src="<?php echo $image_link ;?>c.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Basic-C</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>C++">
                                <img src="<?php echo $image_link ;?>cpp.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>CPP</b></p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>Front End">
                                <img src="<?php echo $image_link ;?>front.png" style="margin: 30px 0px;width:150px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Front end</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>Back End">
                                <img src="<?php echo $image_link ;?>back.png"
                                    style="margin: 10px;height:100px;width:120px;"">
                        </a>
                        <p style=" font-family: 'Montserrat' , sans-serif;color: blue;"><b>Back End</b></p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="<?php echo $home_url ;?>ARTICLES">
                                <img src="<?php echo $image_link ;?>art.jpeg"
                                    style="margin: 10px;width:150px;height:100px;">
                            </a>
                            <p style="font-family: 'Montserrat', sans-serif;color: blue;"><b>Articles</b></p>
                        </center>
                    </div>
                </div>

            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <center><a href="<?php echo $logout; ?>"
                            class="btn  btn-outline-primary waves-effect"
                            style="margin-right: 30px;width: 150px;margin-bottom: 20px;">LOG OUT</a></center>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        setTimeout(() => {
                document.getElementById("blm").style.display = "none";
                document.getElementById("more").style.display = "block";
            }

            , 2000);
        document.getElementById("more").style.display = "none";
    </script>
</body>

</html>