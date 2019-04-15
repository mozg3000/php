<?php
define(IMGS_DIR, "img/gallery_img/");
$imgs_path = array_splice(scandir(IMGS_DIR . "small/"),2);
var_dump($imgs_path);

include "resize.php";
if($_FILES["rfile"]["size"] > 1024*1*1024)
header("Location: http://localhost/hw4.php");
include "hw4_html.php";

if(isset($_POST["load"])){
    $path=IMGS_DIR . "big/" . $_FILES["rfile"][name];

    //Проверка существует ли файл
    if (file_exists($path)) { echo "Файл $path существует, выберите другое имя файла!"; exit;}

//Проверка на размер файла
    {
        echo ("Размер файла не больше 5 мб");
        exit;
    }
//Проверка расширения файла
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if(preg_match("/$item\$/i", $_FILES['rfile']['name'])) {
            echo "Загрузка php-файлов запрещена!";
            exit;
        }
    }
//Проверка на тип файла
    $imageinfo = getimagesize($_FILES['rfile']['tmp_name']);
    if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
        echo "Можно загружать только jpg-файлы, неверное содержание файла, не изображение.";
        exit;
    }

    if($_FILES['rfile']['type'] != "image/jpeg") {
        echo "Можно загружать только jpg-файлы.";
        exit;
    }


    if(move_uploaded_file($_FILES["rfile"][tmp_name],$path)){
//        echo "ФАйл загружен<br/>";
    }else{

//        echo "Error <br/>";
    }
    $path2small=IMGS_DIR . "small/" . $_FILES["rfile"][name];
    create_thumbnail($path, $path2small, 150, 100);

}
