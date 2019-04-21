<?php

function readCatalog(){

    $sql = "SELECT * FROM `catalog`";
    $products = getAssocResult($sql);
    return $products;
}
function readProduct($id){

    $id = (int)$id;
    $sql = "SELECT * FROM catalog WHERE id = {$id}";
    $product = getAssocResult($sql);
    //В случае если новости нет, вернем пустое значение
    $result = [];
    if(isset($product[0])){

        $result = $product[0];
    }

    return $result;
}