<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

<ul><?php
/*
foreach(glob("html/*.html") as $file){
    echo "<li>";
    echo "<a href='?admin=home&edit=$file'>$file</a>";
    echo"</li>";
}*/
if(isset($_POST["button"],$_GET["edit"])){
    //file_put_contents($_GET["edit"], $_POST["text"]);
    $database->update("content", array("content" => $_POST["text"], "name" => $_POST["tabelle_name"]),array("id" => $_GET["edit"]));
}
else if(isset($_POST["button"],$_GET["add"])){
    $database->insert("content", array("content" => $_POST["text"], "name" => $_POST["tabelle_name"]));
}


$pages = $database->select("content", "*");
foreach($pages as $page){
    echo "<li>";
    echo "<a href='?admin=home&edit=".$page["id"]."'>".$page["name"]."</a>";
    echo "</li>";
}
echo"<a href='?admin=home&add'>hinzufügen</a>";




 ?>

</ul>
<?php
echo "<input type='text' name='tabelle_name' value='".$page["name"]."'>";
if(isset($_GET["edit"])){
$page = $database->get("content", array("content", "name"), array("id" => $_GET["edit"]));
    echo '<form action="" method="post">';
        echo "<textarea name='text' id='editor1'>".$page["content"]."</textarea>";

        echo "<input type='text' name='tabelle_name' value='".$page['name']."'>";
        echo "<input type='submit' value='speichern' name='button'/>";
        echo "<input type='submit' value='löschen' name='delete'>";
    echo"</form>";
}
else if(isset($_GET["add"])){
    echo '<form action="" method="post">';
        echo "<textarea name='text' id='editor1'></textarea>";
        echo "<input type='text' name='tabelle_name'>";
        echo "<input type='submit' value='speichern' name='button'/>";
    echo"</form>";
}


if(isset($_POST["delete"])){
    $database->delete("content", array("id" => $_GET["edit"]));
}

 ?>

 <script>
            CKEDITOR.replace( 'editor1' );
        </script>
