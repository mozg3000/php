<?php
function getPicture($id){
    $id = (int)$id;

    $sql = "SELECT * FROM pictures WHERE id = {$id}";
    $pics = getAssocResult($sql);

    //В случае если новости нет, вернем пустое значение
    $result = [];
    if(isset($pics[0])){

        $result = $pics[0];
        var_dump($result["show_number"]);
        $shownumber= $result["show_number"]+1;
//        var_dump($shownumber);
        $sql_increase_show_number = "UPDATE `pictures` SET `show_number`= {$shownumber} WHERE id = {$id};";

        if(increaseShowNumber($sql_increase_show_number)){

            $result["show_number"] += 1;
        }
    }

    return $result;
}
function getPictures()
{
    $sql = "SELECT * FROM `pictures` WHERE type= 'small' order by show_number desc";
    $pics = getAssocResult($sql);
    // var_dump($news);
    return $pics;
}
