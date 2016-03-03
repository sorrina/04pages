<?php
session_start();

require_once __DIR__."/db.php";
if(isset($_POST["action"])){
$user = $_POST["username"];
$pass = $_POST["password"];

if ($database->has("login", [
    "AND" => [
            "passwort" => $pass,
            "user" => $user
    ]
]))
{
    echo "Password is correct.";
    $_SESSION["login"] = $user;
    header("Location: ?page=home");
}
else
{
    echo "Password error.";
    var_dump($database->error());
}



}
function is_eingeloggt(){
    return (isset($_SESSION["login"]));
}




?>
