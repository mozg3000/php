<?php
//Файл констант
define("TEMLATES_DIR", '../views/');
define("LAYOUTS_DIR", 'layout/');


/* DB config */
define('HOST', 'engino');
define('USER', 'root');
define('PASS', '');
define('DB', 'enginodb');

//Тут же подключим основные функции нашего приложения, пока это render
//Можете кстати подключить и в главном index.php если такая вложенность напрягает
include_once "../engine/functions.php";
include_once "../engine/log.php";
include_once "../engine/db.php";
include_once "../engine/sqlQueries.php";

