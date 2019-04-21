<?php

function readCatalog(){

    $sql = "SELECT * FROM `catalog`";
    $products = getAssocResult($sql);
    // var_dump($news);
    return $products;
}
function readProduct($id){

    $id = (int)$id;
    //var_dump($name);
    $sql = "SELECT * FROM catalog WHERE id = {$id}";
    $product = getAssocResult($sql);
//    var_dump($pics);
    //В случае если новости нет, вернем пустое значение
    $result = [];
    if(isset($product[0])){

        $result = $product[0];
    }

    return $result;
}