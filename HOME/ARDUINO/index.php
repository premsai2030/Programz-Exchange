<?php 

// This include contains data base connection, session_start(), error_reporting(0) functions 
include '../connection/db.php' ;

// Query to fetch the programs which are based on Arduino
$sql="SELECT * FROM create_questions WHERE category='AURDINO' ORDER BY id DESC";
$result=mysqli_query($db,$sql);


// This include contains the navbar, styling which will appear when the screen size is above than 760px
include '../Navbars/headers.php' ;

// This include contains while loop to print the fetched data
include '../Navbars/middle.php' ;

// this include contains the data which will appear when the screen size is less than 760px
include '../Navbars/footer.php' ;

?>
