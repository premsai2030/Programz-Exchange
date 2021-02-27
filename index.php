<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-color:white;">
<style>
span.field-icon {
  position: absolute;
  display: inline-block;
  cursor: pointer;
  right:1rem;
  top: 0.7rem;
  color: $input-label-color;
  z-index: 2;
}
span{
	margin:0px 10px;
}
</style>
	<nav class="navbar-nav " style="background-color: black;">   
  <div class="row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-6 ">
    <center>
                <img src="logo.jpeg" alt="Logo" style="width:290px;height:80px;object-fit:contain;">

    </center>
    
  </div>
    <div class="col-sm-3">
      
  </div>
  </div>    

  </nav>
<div class="container" style="margin-top:10% ;">
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-6">
<div class="card">
<form method="post" action="">

    
<h5 class="card-header info-color white-text text-center py-3" >
        <strong>Sign in</strong>
    </h5>
    <div style="padding: 10px;">
      <div class="md-form md-outline"  >
                        <input type="text" id="materialuserid" class="form-control" name="username" required>
                        <label for="materialuserid">Enter your id</label>
                    </div>
    <div class="md-form md-outline" >
  <input type="password" name="password1" id="input-pwd" class="form-control "  required ">
  <label data-error="wrong" for="input-pwd">Password  </label>
<span toggle="#input-pwd"  class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
          </div>

    <div class="input-group">
       <button  class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"  name="login_btn">Sign in</button>

    </div>
    <div >
      <center>
        <p style="font-size:15px;float:left;">
      Not yet a member? <a href="register"> Sign up</a>
    
  </p>
      </center>
    
 



</div>
<br>
    </div>
     
  </form>  
</div>
	
	</div>
<div class="col-sm-3">
</div>
</div>
	
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
<script>
  $('.toggle-password').on('click', function() {
  $(this).toggleClass('fa-eye fa-eye-slash');
  let input = $($(this).attr('toggle'));
  if (input.attr('type') == 'password') {
    input.attr('type', 'text');
  }
  else {
    input.attr('type', 'password');
  }
});

</script>

</body>
</html>
<?php


session_start();
if(isset($_POST['login_btn']))
{


  // connect to database
  $db = mysqli_connect('localhost', 'root', 'premsai2030', 'programz_exchange');
$errors   = array(); 
global $db ;
if(!$db)
{
echo "connection failed";
}
$username=$_POST['username'];
$password1=$_POST['password1'];
if($username=="premsai2030" && $password1=="kancherla@2030")
{
  header('location: admin.php');

  
}

$query = "SELECT * FROM users WHERE username='$username'  LIMIT 1";

      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) > 0) 
{ 
while($row = mysqli_fetch_assoc($results)) {
         $decode1= $row["time"];
}

$arr=str_split($password1);
$len=sizeof($arr);
$arr1=str_split($decode1,2);
$len1=sizeof($arr1);
$arr2=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
$arr3= array("1"=>"A","2"=>"B","3"=>"C","4"=>"D","5"=>"E","6"=>"F","7"=>"G","8"=>"H","9"=>"I","10"=>"J","11"=>"K","12"=>"L","13"=>"M","14"=>"N","15"=>"O","16"=>"P","17"=>"Q","18"=>"R","19"=>"S","20"=>"T","21"=>"U","22"=>"V","23"=>"W","24"=>"X","25"=>"Y","26"=>"Z","27"=>"1","28"=>"2","29"=>"3","30"=>"4","31"=>"5","32"=>"6","33"=>"7","34"=>"8","35"=>"9","36"=>"0","37"=>"!","38"=>"@","39"=>"#","40"=>"$");
$arr4=array();
$arr5=array();
$arr6=array();
$arr7=array();
$arr8=array();
$arr15=array();
for($x=0;$x<2;$x++)
{
$l=($arr1[$x]);
$v=array_search($l,$arr2);
$p=$arr3[$v];
array_push($arr4,$p);
$secm=implode ("",$arr4) ;
}
for($x=2;$x<4;$x++)
{
$l=($arr1[$x]);
$v=array_search($l,$arr2);
$p=$arr3[$v];
array_push($arr5,$p);
$secd=implode ("",$arr5) ;
}
for($x=4;$x<6;$x++)
{
$l=($arr1[$x]);
$v=array_search($l,$arr2);
$p=$arr3[$v];
array_push($arr6,$p);
$sech=implode ("",$arr6) ;
}
for($x=6;$x<8;$x++)
{
$l=($arr1[$x]);
$v=array_search($l,$arr2);
$p=$arr3[$v];
array_push($arr7,$p);
$sec1=implode ("",$arr7) ;
}
for($x=8;$x<10;$x++)
{
$l=($arr1[$x]);
$v=array_search($l,$arr2);
$p=$arr3[$v];
array_push($arr8,$p);
$sec=implode ("",$arr8) ;
}
if($sec1=="55"||$sec1=="01"||$sec1=="07"||$sec1=="13"||$sec1=="19"||$sec1=="25"||$sec1=="31"||$sec1=="37"||$sec1=="43"||$sec1=="49")
{
if($sec=="55"||$sec=="01"||$sec=="07"||$sec=="13"||$sec=="19"||$sec=="25"||$sec=="31"||$sec=="37"||$sec=="43"||$sec=="49")
{
$arr4=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr4[$v]; 
array_push($arr15,$p);
}


}
elseif($sec=="56"||$sec=="02"||$sec=="08"||$sec=="14"||$sec=="20"||$sec=="26"||$sec=="32"||$sec=="38"||$sec=="44"||$sec=="50")
{
$arr5=array("a1","b2","c3","d4","aa","bb","cc","dd","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr5[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="57"||$sec=="03"||$sec=="09"||$sec=="15"||$sec=="21"||$sec=="27"||$sec=="33"||$sec=="39"||$sec=="45"||$sec=="51")
{
$arr6=array("a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr6[$v]; 
array_push($arr15,$p);
}



}

elseif($sec=="58"||$sec=="04"||$sec=="10"||$sec=="16"||$sec=="22"||$sec=="28"||$sec=="34"||$sec=="40"||$sec=="46"||$sec=="52")
{
$arr7=array("hh","as","ad","ag","af","bw","bt","a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr7[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="59"||$sec=="05"||$sec=="11"||$sec=="17"||$sec=="23"||$sec=="29"||$sec=="35"||$sec=="41"||$sec=="47"||$sec=="53")
{
$arr8=array("a1","b2","c3","d4","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr8[$v]; 
array_push($arr15,$p);
}

}

elseif($sec=="00"||$sec=="06"||$sec=="12"||$sec=="18"||$sec=="24"||$sec=="30"||$sec=="36"||$sec=="42"||$sec=="48"||$sec=="54")
{
$arr9=array("a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr9[$v]; 
array_push($arr15,$p);
}

}
}
elseif($sec1=="56"||$sec1=="02"||$sec1=="08"||$sec1=="14"||$sec1=="20"||$sec1=="26"||$sec1=="32"||$sec1=="38"||$sec1=="44"||$sec1=="50")
{
  if($sec=="55"||$sec=="01"||$sec=="07"||$sec=="13"||$sec=="19"||$sec=="25"||$sec=="31"||$sec=="37"||$sec=="43"||$sec=="49")
{
$arr4=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr4[$v]; 
array_push($arr15,$p);
}


}
elseif($sec=="56"||$sec=="02"||$sec=="08"||$sec=="14"||$sec=="20"||$sec=="26"||$sec=="32"||$sec=="38"||$sec=="44"||$sec=="50")
{
$arr5=array("a1","b2","c3","d4","aa","bb","cc","dd","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr5[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="57"||$sec=="03"||$sec=="09"||$sec=="15"||$sec=="21"||$sec=="27"||$sec=="33"||$sec=="39"||$sec=="45"||$sec=="51")
{
$arr6=array("a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr6[$v]; 
array_push($arr15,$p);
}



}

elseif($sec=="58"||$sec=="04"||$sec=="10"||$sec=="16"||$sec=="22"||$sec=="28"||$sec=="34"||$sec=="40"||$sec=="46"||$sec=="52")
{
$arr7=array("hh","as","ad","ag","af","bw","bt","a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr7[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="59"||$sec=="05"||$sec=="11"||$sec=="17"||$sec=="23"||$sec=="29"||$sec=="35"||$sec=="41"||$sec=="47"||$sec=="53")
{
$arr8=array("a1","b2","c3","d4","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr8[$v]; 
array_push($arr15,$p);
}

}

elseif($sec=="00"||$sec=="06"||$sec=="12"||$sec=="18"||$sec=="24"||$sec=="30"||$sec=="36"||$sec=="42"||$sec=="48"||$sec=="54")
{
$arr9=array("a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr9[$v]; 
array_push($arr15,$p);
}

}
}
elseif($sec1=="57"||$sec1=="03"||$sec1=="09"||$sec1=="15"||$sec1=="21"||$sec1=="27"||$sec1=="33"||$sec1=="39"||$sec1=="45"||$sec1=="51")
{
  if($sec=="55"||$sec=="01"||$sec=="07"||$sec=="13"||$sec=="19"||$sec=="25"||$sec=="31"||$sec=="37"||$sec=="43"||$sec=="49")
{
$arr4=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr4[$v]; 
array_push($arr15,$p);
}


}
elseif($sec=="56"||$sec=="02"||$sec=="08"||$sec=="14"||$sec=="20"||$sec=="26"||$sec=="32"||$sec=="38"||$sec=="44"||$sec=="50")
{
$arr5=array("a1","b2","c3","d4","aa","bb","cc","dd","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr5[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="57"||$sec=="03"||$sec=="09"||$sec=="15"||$sec=="21"||$sec=="27"||$sec=="33"||$sec=="39"||$sec=="45"||$sec=="51")
{
$arr6=array("a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr6[$v]; 
array_push($arr15,$p);
}



}

elseif($sec=="58"||$sec=="04"||$sec=="10"||$sec=="16"||$sec=="22"||$sec=="28"||$sec=="34"||$sec=="40"||$sec=="46"||$sec=="52")
{
$arr7=array("hh","as","ad","ag","af","bw","bt","a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr7[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="59"||$sec=="05"||$sec=="11"||$sec=="17"||$sec=="23"||$sec=="29"||$sec=="35"||$sec=="41"||$sec=="47"||$sec=="53")
{
$arr8=array("a1","b2","c3","d4","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr8[$v]; 
array_push($arr15,$p);
}

}

elseif($sec=="00"||$sec=="06"||$sec=="12"||$sec=="18"||$sec=="24"||$sec=="30"||$sec=="36"||$sec=="42"||$sec=="48"||$sec=="54")
{
$arr9=array("a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr9[$v]; 
array_push($arr15,$p);
}

}
}
elseif($sec1=="58"||$sec1=="04"||$sec1=="10"||$sec1=="16"||$sec1=="22"||$sec1=="28"||$sec1=="34"||$sec1=="40"||$sec1=="46"||$sec1=="52")
{
  if($sec=="55"||$sec=="01"||$sec=="07"||$sec=="13"||$sec=="19"||$sec=="25"||$sec=="31"||$sec=="37"||$sec=="43"||$sec=="49")
{
$arr4=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr4[$v]; 
array_push($arr15,$p);
}


}
elseif($sec=="56"||$sec=="02"||$sec=="08"||$sec=="14"||$sec=="20"||$sec=="26"||$sec=="32"||$sec=="38"||$sec=="44"||$sec=="50")
{
$arr5=array("a1","b2","c3","d4","aa","bb","cc","dd","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr5[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="57"||$sec=="03"||$sec=="09"||$sec=="15"||$sec=="21"||$sec=="27"||$sec=="33"||$sec=="39"||$sec=="45"||$sec=="51")
{
$arr6=array("a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr6[$v]; 
array_push($arr15,$p);
}



}

elseif($sec=="58"||$sec=="04"||$sec=="10"||$sec=="16"||$sec=="22"||$sec=="28"||$sec=="34"||$sec=="40"||$sec=="46"||$sec=="52")
{
$arr7=array("hh","as","ad","ag","af","bw","bt","a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr7[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="59"||$sec=="05"||$sec=="11"||$sec=="17"||$sec=="23"||$sec=="29"||$sec=="35"||$sec=="41"||$sec=="47"||$sec=="53")
{
$arr8=array("a1","b2","c3","d4","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr8[$v]; 
array_push($arr15,$p);
}

}

elseif($sec=="00"||$sec=="06"||$sec=="12"||$sec=="18"||$sec=="24"||$sec=="30"||$sec=="36"||$sec=="42"||$sec=="48"||$sec=="54")
{
$arr9=array("a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr9[$v]; 
array_push($arr15,$p);
}

}
}
elseif($sec1=="59"||$sec1=="05"||$sec1=="11"||$sec1=="17"||$sec1=="23"||$sec1=="29"||$sec1=="35"||$sec1=="41"||$sec1=="47"||$sec1=="53")
{
  if($sec=="55"||$sec=="01"||$sec=="07"||$sec=="13"||$sec=="19"||$sec=="25"||$sec=="31"||$sec=="37"||$sec=="43"||$sec=="49")
{
$arr4=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr4[$v]; 
array_push($arr15,$p);
}


}
elseif($sec=="56"||$sec=="02"||$sec=="08"||$sec=="14"||$sec=="20"||$sec=="26"||$sec=="32"||$sec=="38"||$sec=="44"||$sec=="50")
{
$arr5=array("a1","b2","c3","d4","aa","bb","cc","dd","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr5[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="57"||$sec=="03"||$sec=="09"||$sec=="15"||$sec=="21"||$sec=="27"||$sec=="33"||$sec=="39"||$sec=="45"||$sec=="51")
{
$arr6=array("a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr6[$v]; 
array_push($arr15,$p);
}



}

elseif($sec=="58"||$sec=="04"||$sec=="10"||$sec=="16"||$sec=="22"||$sec=="28"||$sec=="34"||$sec=="40"||$sec=="46"||$sec=="52")
{
$arr7=array("hh","as","ad","ag","af","bw","bt","a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr7[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="59"||$sec=="05"||$sec=="11"||$sec=="17"||$sec=="23"||$sec=="29"||$sec=="35"||$sec=="41"||$sec=="47"||$sec=="53")
{
$arr8=array("a1","b2","c3","d4","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr8[$v]; 
array_push($arr15,$p);
}

}

elseif($sec=="00"||$sec=="06"||$sec=="12"||$sec=="18"||$sec=="24"||$sec=="30"||$sec=="36"||$sec=="42"||$sec=="48"||$sec=="54")
{
$arr9=array("a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr9[$v]; 
array_push($arr15,$p);
}

}
}
elseif($sec1=="00"||$sec1=="06"||$sec1=="12"||$sec1=="18"||$sec1=="24"||$sec1=="30"||$sec1=="36"||$sec1=="42"||$sec1=="48"||$sec1=="54")
{
  if($sec=="55"||$sec=="01"||$sec=="07"||$sec=="13"||$sec=="19"||$sec=="25"||$sec=="31"||$sec=="37"||$sec=="43"||$sec=="49")
{
$arr4=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr4[$v]; 
array_push($arr15,$p);
}


}
elseif($sec=="56"||$sec=="02"||$sec=="08"||$sec=="14"||$sec=="20"||$sec=="26"||$sec=="32"||$sec=="38"||$sec=="44"||$sec=="50")
{
$arr5=array("a1","b2","c3","d4","aa","bb","cc","dd","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr5[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="57"||$sec=="03"||$sec=="09"||$sec=="15"||$sec=="21"||$sec=="27"||$sec=="33"||$sec=="39"||$sec=="45"||$sec=="51")
{
$arr6=array("a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr6[$v]; 
array_push($arr15,$p);
}



}

elseif($sec=="58"||$sec=="04"||$sec=="10"||$sec=="16"||$sec=="22"||$sec=="28"||$sec=="34"||$sec=="40"||$sec=="46"||$sec=="52")
{
$arr7=array("hh","as","ad","ag","af","bw","bt","a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr7[$v]; 
array_push($arr15,$p);
}


}

elseif($sec=="59"||$sec=="05"||$sec=="11"||$sec=="17"||$sec=="23"||$sec=="29"||$sec=="35"||$sec=="41"||$sec=="47"||$sec=="53")
{
$arr8=array("a1","b2","c3","d4","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr8[$v]; 
array_push($arr15,$p);
}

}

elseif($sec=="00"||$sec=="06"||$sec=="12"||$sec=="18"||$sec=="24"||$sec=="30"||$sec=="36"||$sec=="42"||$sec=="48"||$sec=="54")
{
$arr9=array("a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr3);
$p=$arr9[$v]; 
array_push($arr15,$p);
}

}
}
$encrypteddata=implode ("",$arr15) ; 
$query1 = "SELECT * FROM users WHERE username='$username'  LIMIT 1";

      $results1 = mysqli_query($db, $query);

      if (mysqli_num_rows($results1) > 0) 
{ 
while($row = mysqli_fetch_assoc($results1)) {
         $password= $row["encrypted"];
echo "<br>";
if($password==$encrypteddata)
{
$_SESSION['username']=$username ;
header('location: HOME');

}
else
{
echo '<script>alert("Incorrect password !")</script>'; 
exit();
}
}
}
else
{

echo $username."not found!!!!!!!";
exit();
}

mysql_close($db);
//if loop will completed if user is exists in database
}
else
{
echo '<script>alert("This UserName doesnt exists !")</script>'; 
exit();
}

}
?>