<?php
header ("Content-Type: text/html; charset=utf-8");

$title = "Главная страница - страница обо мне";
$header = "Информация обо мне";
$content = "Краткая биография обо мне
Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
На данный момент работаю ведущим инженером в крупной авиакомпании.
Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
фотографиями на эту тему";
$suggestion = "Тут можете поместить картинку";
$emphasis = "Просто пример жирного текста";
$year = "2019";
//**************************************
$a = 5;
$b = '05';
var_dump($a == $b);
// Почему true?
echo "Потому, что происходит неявное приведение типов";
var_dump((int)'012345');
// Почему 12345?
echo "Потому, что происходит явное приведение типов";
var_dump((float)123.0 === (int)123.0);
// Почему false?
echo "Потому, что float (123.0) не равен int (123)";
var_dump((int)0 === (int)'hello, world');
// Почему true?
echo "Потому, что строка не содержащая цифр приводится к 0 (нулю)," . " при приведении типа к int";

include "index.html";