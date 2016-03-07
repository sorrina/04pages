<?php

if(isset($_GET["add"])){
    echo"<form method='post' action=''>";
    echo"<p>Name<input type='text' name='name'></p>";
    echo"<p>Passwort<input type='passwort' name='pass'></p>";
    echo"<input type='submit' name='submit'>";
    echo "</form>";

    if(isset($_POST["submit"])){
        $pages = $database->insert("login", array('user' => $_POST['name'], 'passwort' => $_POST['pass']));
    }
}

if(isset($_GET["delete"])){
   $database->delete("login", array("id" => $_GET["delete"]));
}


echo "<ul>";
$pages = $database->select("login", array("id", "user"));
foreach($pages as $page){
    echo "<li>";
    echo $page["user"];
    echo" <a href='?admin=users&delete={$page["id"]}'>löschen</a>";
    echo" <a href='?admin=users&update={$page["id"]}'>Passwort ändern</a>";
    echo "</li>";
}
echo "</ul>";


echo"<a href='?admin=users&add'>hinzufügen</a>";




if(isset($_GET["update"])){
    echo '<form action="" method="post">';
        echo "<input type='text' name='passwort'>";
        echo "<input type='submit' value='speichern' name='button'/>";
    echo"</form>";

    if(isset($_POST["button"])){
        $page = $database->update("login", array("passwort" => $_POST["passwort"]), array("id" => $_GET["update"]));
    }
}











?>
