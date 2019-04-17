<?php
function getPicture($id){
    $id = (int)$id;

    $sql = "SELECT * FROM pictures WHERE id = {$id}";
    $pics = getAssocResult($sql);

    //В случае если новости нет, вернем пустое значение
    $result = [];
    if(isset($pics[0]))
        $result = $pics[0];

    return $result;
}
function getPictures()
{
    $sql = "SELECT * FROM pictures";
    $pics = getAssocResult($sql);
    // var_dump($news);
    return $pics;
}