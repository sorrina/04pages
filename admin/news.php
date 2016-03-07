<?php

if(isset($_POST["button"],$_GET["add"])){
    $database->insert("news", array("inhalt" => $_POST["text"], "autor" => $_SESSION["login"],
    "titel" => $_POST["titel"], "datum" => date("Y-m-d")));
}

if(isset($_GET["add"])){
    echo '<form action="" method="post">';
    echo "<p>Titel<input type='text' name='titel'></p>";
    echo "<p>Text<textarea name='text' id='editor1'></textarea></p>";
    echo "<p><input type='submit' value='speichern' name='button'/></p>";
    echo"</form>";
}
else if(isset($_GET["edit"])){

    if(isset($_POST["button"])){
        $database->update("news", array("inhalt" => $_POST["text"],
        "titel" => $_POST["titel"]),array("id" => $_GET["edit"]));
    }


    $variable = $database->get("news", array("titel", "inhalt"), array("id" => $_GET["edit"]));

    echo '<form action="" method="post">';
    echo "<p>Titel<input type='text' name='titel' value='{$variable["titel"]}'></p>";
    echo "<p>Text<textarea name='text' id='editor1'>{$variable["inhalt"]}</textarea></p>";
    echo "<p><input type='submit' value='speichern' name='button'/></p>";
    echo"</form>";
}



echo"<a href='?admin=news&add'>hinzufügen</a><br/>";

if(isset($_GET["delete"])){
    $database->delete("news", array("id" => $_GET["delete"]));
}



$datas = $database->select("news", "*");
foreach($datas as $row){
    echo $row["titel"];
    $id = $row["id"];
    echo " <a href='?admin=news&edit=$id'>bearbeiten</a>";
    ?>
    <a onclick="return confirm('Wollen Sie den Newseintrag wirklich löschen?');" href='?admin=news&delete=<?php echo $id;?>'>löschen</a><br/>
<?php
}

?>
