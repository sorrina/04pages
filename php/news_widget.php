<?php
//array("ORDER" => "datum DESC", "LIMIT" => 3)
function newswidget($database, $anzahl=3){
    $content = "";
    $datas = $database->select("news", "*", array("ORDER" => "datum DESC", "LIMIT" => $anzahl));
    foreach($datas as $row){
        $content .=  "<a href='?page=news&show={$row['id']}'>".$row["titel"].'</a>';
        $content .=  "<br/>";

    }
    return $content;
}


?>
