<?php

function addToCart($id, $session){

    $id=(int)$id;
    $sql = "INSERT INTO `cart`( `id_product`, `id_session`) VALUES ($id, '$session');";
//    var_dump($sql);
    return executeQuery($sql);

}
function readCart($session){

    $result = [];
    $sql = "SELECT id, product_name, count(product_name) as quantity, sum(price) as total, description, price, img FROM cart, enginodb.catalog where id_session = '$session' and id_product = id group by id_product";
    $result = getAssocResult($sql);
//    var_dump($result);
    return $result;
}
function deleteFromCart($id, $session){

    $sql = "DELETE FROM `cart` WHERE id_session = '$session' and id_product = $id";

    return executeQuery($sql);
}

function proceedOrder($session, $telefon){

        $sql = "INSERT INTO `orders`(`id_session`, `telefon`) VALUES ('$session', $telefon)";
//        var_dump($sql); die();

    return executeQuery($sql);
}