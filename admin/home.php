<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>



<ul><?php
foreach(glob("html/*.html") as $file){
    echo "<li>";
    echo "<a href='?admin=home&edit=$file'>$file</a>";
    echo"</li>";
}
 ?>

</ul>
<?php



if(isset($_GET["edit"])){
    if(isset($_POST["button"])){
        file_put_contents($_GET["edit"], $_POST["text"]);
    }



    echo '<form action="" method="post">';
        echo "<textarea name='text' id='editor1'>".file_get_contents($_GET["edit"])."</textarea>";
        echo "<input type='submit' value='speichern' name='button'/>";
    echo"</form>";


}
 ?>

 <script>
            CKEDITOR.replace( 'editor1' );
        </script>
