 <?php 
include '../connection/db.php' ;
include '../connection/all_data.php' ;
$username=$_SESSION["username"];
$title=$_GET["title"];
$pass=$_GET["pass"];

$sql="SELECT *FROM create_room WHERE title='$title' AND pass='$pass' LIMIT 1";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
$get_id=$row["id"];
$sql1="SELECT *FROM chit_chat WHERE get_id='$get_id' ORDER BY id DESC ";
$res1=mysqli_query($db,$sql1);
include '../Navbars/headers.php ';
 ?>


 	<br><br><br><br>

<!--------------------------------------------------------------container starts-------------------------->
<div class="container">
<nav class="nav navbar-nav justify-content-center" style="background-color:black;width: 100%;padding: 10px;">
<center>			<a class="navbar-brand" style="color: white;">Room Created By <?php echo $row["username"]; ?></a>
			<p style="font-size: 20px;color: white;">"<?php echo $title; ?>"</p>

</center>
		</nav>
		<br>
	<div class="row">
	
		<div class="col-sm-8">
		<?php include './so_code-and-des.php';?>
		</div>
		<div class="col-sm-4">
			<?php include './chat-ui.php' ;?>
		</div>
	</div>
</div>

 	<br><br><br>
	 <script type="text/javascript" src="db.js" ></script>
	 <input value="<?php echo $get_id;?>" id="get_id" hidden>
	 <input value="<?php echo $username;?>" id="username" hidden>
<!-----------------------------------------------------------------------navbar for mobile phones------------------------------------>
<?php

include '../Navbar/footer.php ';

?>
