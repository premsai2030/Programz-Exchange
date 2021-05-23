<?php
include 'connection/db.php';
include 'connection/all_data.php' ;

$sql = "SELECT COUNT(username) AS viewed ,category FROM `create_questions` WHERE username = '".$username."' GROUP BY category";

$res = mysqli_query($db,$sql) ;


$langs = array("JAVA"=>0,"PYTHON" => 0 , "BASIC-C" => 0,"AURDINO" => 0 , "RASPBERRY" => 0 , "C++" => 0 , "Front End" => 0 , "Back End" => 0,"Matlab" => 0 , "Verilog" => 0);
while($row = mysqli_fetch_assoc($res))
{
    $langs[$row["category"]] = $row["viewed"];
}
arsort($langs);

$JAVA = '
<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'JAVA">
                                <img src="'.$image_link.'j.jpg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style=" font-family: Montserrat , sans-serif;color: blue;"><b>Java</b></p>
                        </center>
                    </div>
                </div>
';

$PYTHON = '
<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'PYTHON">
                                <img src="'.$image_link.'p.jpg" style="margin: 10px;width:120px;"">
                        </a>
                        <p style=" font-family: Montserrat , sans-serif;color: blue;"><b>Python</b></p>
                        </center>
                    </div>
                </div>

';

$BASIC_C = '
<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'BASIC C">
                                <img src="'.$image_link.'c.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: Montserrat, sans-serif;color: blue;"><b>Basic-C</b></p>
                        </center>
                    </div>
                </div>
';


$RASPBERRY = '
<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'RASPBERRY">
                                <img src="'.$image_link.'r.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: Montserrat, sans-serif;color: blue;"><b>Raspberry Pi</b></p>
                        </center>
                    </div>
                </div>
';

$AURDINO= '

<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'ARDUINO">
                                <img src="'.$image_link.'a.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: Montserrat, sans-serif;color: blue;"><b>Arduino</b></p>
                        </center>
                    </div>
                </div>
';


$CPP = '
<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'C++">
                                <img src="'.$image_link.'cpp.jpg" style="margin: 10px;width:120px;">
                            </a>
                            <p style="font-family: Montserrat, sans-serif;color: blue;"><b>CPP</b></p>
                        </center>
                    </div>
                </div>
';

$Front_End = '
<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'Front End">
                                <img src="'.$image_link.'front.png" style="margin: 30px 0px;width:150px;">
                            </a>
                            <br><br>
                            <p style="font-family: Montserrat, sans-serif;color: blue;"><b>Front end</b></p>
                        </center>
                    </div>
                </div>
';

$Back_End = '
<div class="col-sm-3">
                    <div class="card">
                        <center>
                            <a href="'.$home_url.'Back End">
                                <img src="'.$image_link.'back.png"
                                    style="margin: 10px;height:100px;width:120px;"">
                        </a>
                        <br><br>
                        <p style=" font-family: Montserrat , sans-serif;color: blue;"><b>Back End</b></p>
                        </center>
                        
                    </div>
                    
                </div>
                
';

$arr = array("JAVA" => $JAVA,"PYTHON"=>$PYTHON,"AURDINO" => $AURDINO,"RASPBERRY" => $RASPBERRY,"C++"=>$CPP,"BASIC C" => $BASIC_C,"Front End" => $Front_End , "Back End" => $Back_End,"Matlab" => $Matlab , "Verilog" => $Verilog);




$blocks = "";

foreach ($langs as $language => $views){ 
    $blocks .= $arr[$language];
} 


?>