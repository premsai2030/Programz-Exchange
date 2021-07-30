<?php
include '../connection/db.php' ;
include '../Navbars/headers.php';
?>
    <script src="ckeditor5/ckeditor.js"></script>
    <br><br><br><br><br><br>
    <style>
        
    </style>
    <div class="container">
<form method="post" action="dbcreate.php">
   <center> <h3>Title of the Article</h3></center>
   <textarea style="width:100%;border-color:grey;" name="title"></textarea>
   <br><br>
   <center> <h3>Description of the Article</h3></center>

    <textarea id="editor"  name="article"></textarea>
    <br><br>
    <center><button class="btn btn-success">Submit</button></center>
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