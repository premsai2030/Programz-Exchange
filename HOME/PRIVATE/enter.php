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
<div class="container" id="more">
	<div class="row">
		<nav class="nav navbar-nav justify-content-center" style="background-color:black;width: 100%;padding: 10px;">
<center>			<a class="navbar-brand" style="color: white;">Room Created By <?php echo $row["username"]; ?></a>
			<p style="font-size: 20px;color: white;">"<?php echo $title; ?>"</p>

</center>
		</nav>
	</div>
		<div class="row">
			<div class="col-sm-8">
			<?php 
if ($username==$row["username"]) {


	 ?>
	<p style="text-align: center;margin-top: 5px;">If you  want edit description or source code  <a href="<?php echo $private_url."edit.php?id=".$row["id"]; ?>" style="text-decoration: none;" >click this</a></p>
	<?php 

	} ?>
<?php 

	if ($row["source_code"]=='' && $row["description"]=='') {
	?>
	
<?php }
if($row["description"]!='' && $row["source_code"]!=''){
?>
 <center><strong>Description</strong></center>
<div class="card" style="width:100%;padding: 10px;border-bottom-color: blue ;border-bottom-width: 2px; ">
		<p><?php echo $row["description"]; ?></p>
	</div><br>
	<center><strong>Source Code</strong></center>
	<div class="card" style="width:100%;padding: 10px;margin-top:10px;border-bottom-color: green ;border-bottom-width: 2px; ">
		<textarea rows="<?php echo substr_count($row["source_code"],"\n") +2 ; ?>" style="border-color: white;resize: none;" disabled=""><?php echo $row["source_code"]; ?></textarea>
		
	</div>
	

<?php 
}
if($row["source_code"]=='')
{
	
	?>
	<center><strong>Description</strong></center>
	<div class="card" style="width:100%;padding: 10px;border-bottom-color: blue ;border-bottom-width: 2px; ">
		<p><?php echo $row["description"]; ?></p>
	</div>
		

	<?php 
}
if($row["description"]=='')
{
 ?>
 <center><strong>Source Code</strong></center>
 <div class="card" style="width:100%;padding: 10px;margin-top:10px;border-bottom-color: green ;border-bottom-width: 2px; ">
		<textarea rows="<?php echo substr_count($row["source_code"],"\n") +2 ; ?>" style="border-color: white;" disabled=""><?php echo $row["source_code"]; ?></textarea>
		
	</div>
 <?php
}
 ?>
<!-- <div class="card" style="width: 100%;margin-top: 20px;padding: 10px;border-bottom-color: skyblue">
	
	<label ><b><h5>Some Description :</h5></b></label>
  <div class="input-group mb-3">
  <input value="<?php echo $get_id ;?>" id="get_id" hidden>
<textarea class="form-control" style="resize: both; " rows="3" placeholder="chit-chat" name="description" required="" id="chit_chat"></textarea><br>
</div>
<center><button class="btn btn-success" type="submit" name="submit" onclick="upload();" >Submit</button></center>

</div> -->
<div id="data" style="width: 100%;">

</div>
			</div>
			<div class="col-sm-4">
				<br><center><strong>Chats</strong></center>
				<div class="card" style="height:500px;" >
					<div class="container-fluid">
					<div>
					<span style="background-color:white;padding:4px;">hello</span>
					</div>
					<div>
					<span style="float:right;background-color:white;padding:4px;">hi</span>
					</div>
					<div style="position:absolute;bottom:0;">
				
					
							<input class="form-control" type="text" placeholder="Type Something..." style="max-width:100%;">
						
					
				</div>
					</div>
					
				</div>
			</div>
		</div>

<!-----------------------------row ends here------------------------------>
	</div>
</div>
 	<br><br><br>
	 <script type="text/javascript" src=".js" ></script>
<!-----------------------------------------------------------------------navbar for mobile phones------------------------------------>
<?php

include '../Navbar/footer.php ';

?>
