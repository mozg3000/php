<?php
define(IMGS_DIR, "img/gallery_img/");
$imgs_path = array_splice(scandir(IMGS_DIR . "small/"),2);

include "resize.php";
include "upload.php";
include "hw4_html.php";

if(isset($_POST["load"])){

    $path=IMGS_DIR . "big/" . $_FILES["rfile"][name];
    uploadFile("rfile", $path);

    $path2small=IMGS_DIR . "small/" . $_FILES["rfile"][name];
    create_thumbnail($path, $path2small, 150, 100);
}
//header("Location: http://localhost/hw4.php");
