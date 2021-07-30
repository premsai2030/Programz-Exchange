<?php
include '../connection/db.php' ;
include '../Navbars/headers.php';
$id = $_GET["id"];
$sql = "SELECT * FROM article WHERE id ='$id' " ;
$res = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($res) ;
?>
    <script src="ckeditor5/ckeditor.js"></script>
    <br><br><br><br><br><br>
    <div class="container">
<form method="post" action="dbupdate.php">
   <center> <h3>Title of the Article</h3></center>
   <textarea style="width:100%;border-color:grey;" name="title"><?php echo $row["title"];?></textarea>
   <br><br>
   <center> <h3>Description of the Article</h3></center>

    <textarea id="editor"  name="article"><?php echo $row["article"];?></textarea>
    <br><br>
    <center><button class="btn btn-success">update</button></center>
    <input name="id" value="<?php echo $row["id"];?>" hidden></input>
    </form>
</div>




    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php
include '../Navbars/footer.php';
?>