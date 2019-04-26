<?php

function readCatalog(){

    $sql = "SELECT * FROM `catalog` order by price desc";
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
function initProduct($id){

    $content = readProduct($id);
//    var_dump($id);
    $feedback = readFeedback($id);
    $params['product_name'] = $content['product_name'];
    $params['description'] = $content['description'];
    $params['img'] = $content['img'];
    $params['id'] = $content['id'];
    $params['feedback'] = $feedback;
//var_dump($feedback);
    return $params;
}
function addfeedback($id, $name, $feedback){

    $id=(int)$id;
    $sql = "INSERT INTO `feedback`(`sender`, `message`, `product_id`) VALUES ('{$name}','{$feedback}', $id)";
//    var_dump($sql);
    executeQuery($sql);
}

function  readFeedback($id){

    $id = (int)$id;
    $result=[];
    if($id!=0){

        $sql = "SELECT * FROM feedback WHERE product_id = $id";
//    var_dump($sql);
        $result = getAssocResult($sql);
    }
//var_dump($result);
    return $result;
}