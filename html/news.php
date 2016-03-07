<?php

$content ="";

if(isset($_GET["show"])){
    $row = $database->get("news", '*', array("id" => $_GET["show"]));
    $content .=  '<h1>'.$row["titel"].'</h1>';
    $content .=  date_format(date_create($row["datum"]), 'd.m.Y')."<br/>";
    $content .=  $row["inhalt"];
    $content .=  "<hr>";



$content .= $database->get("login", 'user', array("id" => $row["autor"]));
}
else{


$datas = $database->select("news", "*", array('ORDER' => 'datum'));
foreach($datas as $row){
    $content .=  '<h1>'.$row["titel"].'</h1>';
    $content .=  date_format(date_create($row["datum"]), 'd.m.Y')."<br/>";
    if(strlen($row["inhalt"])<=200){
        $content .=  $row["inhalt"];
    }
    else{
        $content .=  substr($row["inhalt"], 0, 200).'...';
        $content .= "<a href='?page=news&show={$row["id"]}'>mehr lesen</a> ";
    }
    $content .=  "<hr>";
}
}
?>
