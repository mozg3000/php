<?php

function ordersList(){

    $sql = "SELECT  DISTINCT(id_order), telefon FROM `cart` join orders on cart.id_session = orders.id_session";
    $orders = getAssocResult($sql);

    return $orders;
}

function showOrder($id){
//var_dump($id);die();
    $id = (int) $id;
    $sql = "SELECT id,product_name, description, price, img, cart.id_session FROM `orders`, cart, catalog WHERE id_order = {$id} and orders.id_session = cart.id_session AND cart.id_product = catalog.id ";
//    var_dump($sql);
    $order_content = getAssocResult($sql);

    return $order_content;
}