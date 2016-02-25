<?php
foreach(glob("php/*.php") as $filename){
    require_once $filename;
}



if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = "home";
}
$pfad = "html/$page.html";

if (file_exists($pfad)) {
    $content = file_get_contents($pfad);
    include("tpl/main.php");
} else {
    echo "Die Datei existiert nicht";
}







 ?>
