
<?php
session_start();

error_reporting(0);
if(isset($_POST['register_btn']))
{
	$db = mysqli_connect('localhost', 'root', 'premsai2030', 'programz_exchange');

$decode=$_POST['password1'];
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$arr=str_split($decode);
$len=sizeof($arr);
$secm=date("m");
$secd=date("d");
$sech=date("H");
$sec1=date("i");
$sec=date("s");
$arr1= array("1"=>"A","2"=>"B","3"=>"C","4"=>"D","5"=>"E","6"=>"F","7"=>"G","8"=>"H","9"=>"I","10"=>"J","11"=>"K","12"=>"L","13"=>"M","14"=>"N","15"=>"O","16"=>"P","17"=>"Q","18"=>"R","19"=>"S","20"=>"T","21"=>"U","22"=>"V","23"=>"W","24"=>"X","25"=>"Y","26"=>"Z","27"=>"1","28"=>"2","29"=>"3","30"=>"4","31"=>"5","32"=>"6","33"=>"7","34"=>"8","35"=>"9","36"=>"0","37"=>"!","38"=>"@","39"=>"#","40"=>"$");
$arr2=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
$arr3=array();
$arrt=array();
$combine=$secm.$secd.$sech.$sec1.$sec ;
for($x=0;$x<10;$x++)
{
$d2=($combine[$x]);
$d3=array_search($d2,$arr1);
$d4=$arr2[$d3];
array_push($arrt,$d4);

}
//encrypted time---------------------------------------------------------
$encryptedtime=implode ("",$arrt) ; 
if($sec=="55"||$sec=="01"||$sec=="07"||$sec=="13"||$sec=="19"||$sec=="25"||$sec=="31"||$sec=="37"||$sec=="43"||$sec=="49")
{
$arr4=array("gg","hh","as","ad","ag","af","ah","aj","ak","a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr1);
$p=$arr4[$v]; 
array_push($arr3,$p);
}


}
elseif($sec=="56"||$sec=="02"||$sec=="08"||$sec=="14"||$sec=="20"||$sec=="26"||$sec=="32"||$sec=="38"||$sec=="44"||$sec=="50")
{
$arr5=array("a1","b2","c3","d4","aa","bb","cc","dd","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr1);
$p=$arr5[$v]; 
array_push($arr3,$p);
}


}

elseif($sec=="57"||$sec=="03"||$sec=="09"||$sec=="15"||$sec=="21"||$sec=="27"||$sec=="33"||$sec=="39"||$sec=="45"||$sec=="51")
{
$arr6=array("a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr1);
$p=$arr6[$v]; 
array_push($arr3,$p);
}



}

elseif($sec=="58"||$sec=="04"||$sec=="10"||$sec=="16"||$sec=="22"||$sec=="28"||$sec=="34"||$sec=="40"||$sec=="46"||$sec=="52")
{
$arr7=array("hh","as","ad","ag","af","bw","bt","a1","b2","c3","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","d4","aa","bb","cc","dd","ee","ff","gg","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr1);
$p=$arr7[$v]; 
array_push($arr3,$p);
}


}

elseif($sec=="59"||$sec=="05"||$sec=="11"||$sec=="17"||$sec=="23"||$sec=="29"||$sec=="35"||$sec=="41"||$sec=="47"||$sec=="53")
{
$arr8=array("a1","b2","c3","d4","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr1);
$p=$arr8[$v]; 
array_push($arr3,$p);
}

}

elseif($sec=="00"||$sec=="06"||$sec=="12"||$sec=="18"||$sec=="24"||$sec=="30"||$sec=="36"||$sec=="42"||$sec=="48"||$sec=="54")
{
$arr9=array("a1","b2","c3","d4","aa","bb","cc","dd","ee","ff","gg","hh","as","ad","ag","af","ah","aj","ak","al","aq","aw","ae","ar","at","ay","au","ai","ao","ba","bs","bd","bf","bh","bq","bw","bt","by","bu","ch","c5");
for($x="0";$x<$len;$x++)
{
$l=strtoupper($arr[$x]);
$v=array_search($l,$arr1);
$p=$arr9[$v]; 
array_push($arr3,$p);
}

}


$encrypteddata=implode ("",$arr3) ; 
//database programming starts now
$query = "SELECT * FROM users WHERE username='$username'  LIMIT 1";
$query1 = "SELECT * FROM users ";
$results1 = mysqli_query($db, $query1);
$results2=mysqli_num_rows($results1) ;
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) > 0) 
{ 
				
				echo "username found";

}


else{

$sql="INSERT INTO users(name,username,email,password1,time,encrypted)  VALUES( '$name','$username','$email','$password1','$encryptedtime','$encrypteddata')";



if( mysqli_query($db,$sql))
{
header('location: http://localhost/programz-website/');
}
else
{

echo "not got registered";
}


}
mysql_close($db);


}
?>