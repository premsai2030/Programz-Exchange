<?php 
if ($username==$row["username"]) {


	 ?>
	<p style="text-align: center;margin-top: 5px;">If you  want edit description or source code  <a href="<?php echo $private_url."edit.php?id=".$row["id"]; ?>" style="text-decoration: none;" >click this</a></p>
	<?php 

	} ?>
<?php 
if ($row["description"]=='' && $row["source_code"]=='') {
	?>
	<h3 style="color: grey;margin-top: 20%;text-align:center;">There is nothing to SHOW</h3>
	<?php 
}
else{
	if ($row["source_code"]=='') {
	?>
	<div class="card" style="width:100%;padding: 10px;border-bottom-color: blue ;border-bottom-width: 2px; ">
		<p><?php echo $row["description"]; ?></p>
	</div>
<?php }
else if($row["description"]==''){
?>
	<div class="card" style="width:100%;padding: 10px;margin-top:10px;border-bottom-color: green ;border-bottom-width: 2px; ">
		<textarea rows="20" style="border-color: white;resize: none;" disabled=""><?php echo $row["source_code"]; ?></textarea>
		
	</div>

<?php 
}

else{
	?>
	<div class="card" style="width:100%;padding: 10px;border-bottom-color: blue ;border-bottom-width: 2px; ">
		<p><?php echo $row["description"]; ?></p>
	</div>
		<div class="card" style="width:100%;padding: 10px;border-bottom-color: green ;margin-top:10px;border-bottom-width: 2px; ">
		<textarea rows="20" style="border-color: white;"><?php echo $row["source_code"]; ?></textarea>
	</div>


	<?php 
}
} ?>