<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>



<ul><?php
/*
foreach(glob("html/*.html") as $file){
    echo "<li>";
    echo "<a href='?admin=home&edit=$file'>$file</a>";
    echo"</li>";
}*/
if(isset($_POST["button"])){
    //file_put_contents($_GET["edit"], $_POST["text"]);
    $database->update("content", array("content" => $_POST["text"], "name" => $_POST["tabelle_name"]),array("id" => $_GET["edit"]));
}



$pages = $database->select("content", "*");
foreach($pages as $page){
    echo "<li>";
    echo "<a href='?admin=home&edit=".$page["id"]."'>".$page["name"]."</a>";
    echo "</li>";
}

 ?>

</ul>
<?php



if(isset($_GET["edit"])){



$page = $database->get("content", array("content", "name"), array("id" => $_GET["edit"]));
    echo '<form action="" method="post">';
        echo "<textarea name='text' id='editor1'>".$page["content"]."</textarea>";
        //echo '<input type="text" name="tabelle_name" value="'.$page["name"].'">';
        echo "<input type='text' name='tabelle_name' value=' ".$page['name']."'>";
        echo "<input type='submit' value='speichern' name='button'/>";
    echo"</form>";

}
 ?>

 <script>
            CKEDITOR.replace( 'editor1' );
        </script>
