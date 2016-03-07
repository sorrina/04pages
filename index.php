<?php
foreach(glob("php/*.php") as $filename){
    require_once $filename;
}



if(isset($_GET["page"])){
    $page = $_GET["page"];
}elseif(isset($_GET["admin"])){
    $page = "";
}
else{
    $page = "home";
}
$pfad = "html/$page.html";

if($page =="news"){
    include("html/news.php");
    include("tpl/main.php");
}

elseif ($database->has("content", array("name" => $page))){
    $content = $database->get("content", "content", array("name" => $page));
    include("tpl/main.php");
}elseif(isset($_GET["admin"])){
if (is_eingeloggt()){
    $page = $_GET["admin"];
    $pfad = "admin/$page.php";
    if(file_exists($pfad)) {
        include $pfad;
    }
}else{
    echo "Zugriff verweigert.";
}

}


 else {
    echo "Die Datei existiert nicht";
}

 ?>
