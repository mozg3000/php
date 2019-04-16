<?php
//Файл констант
define("TEMLATES_DIR", '../views/');
define("LAYOUTS_DIR", 'layout/');
define("IMGS_DIR", "./img/gallery_img/");

//Тут же подключим основные функции нашего приложения, пока это render
//Можете кстати подключить и в главном index.php если такая вложенность напрягает
include "../engine/functions.php";
include "../engine/log.php";
include "../engine/resize.php";
include "../engine/upload.php";

