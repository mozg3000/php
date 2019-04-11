<?php

echo "Задание 1<br/><br/>";

$i=0;
while($i<=100){

    if($i%3===0){

        echo $i . "<br/>";
    }
    $i++;
}

echo "<br/><br/>Задание 2<br/><br/>";

function printNumber(){

    echo 0 . " - чётное число<br/>";
    $i=1;
    do{
        if($i%2===0){
            echo $i . " - чётное число<br/>";
        }else{
            echo $i . " - нечётное число<br/>";
        }
        $i++;

    }while($i<=10);
}
printNumber();

echo "<br/><br/>Задание 3<br/><br/>";

$list = [
    "Московская область" => [Москва, Зеленоград, Клин],
    "Ленинградская область" => ["Санкт-Петербург", Всеволожск, Павловск, Кронштадт]
];

foreach($list as $key => $value){

    echo $key . ":<br/>";

    if(is_array($value)){

        for ($i = 0; $i<count($value)-1; ++$i){

            echo $value[$i] . ", ";
        }
        echo $value[$i] . " <br/>";
    }
}
unset($i);
unset($value);

echo "<br/><br/>Задание 4<br/><br/>";
include "alfavit.php";

$str="Некоторый отрывок(!) текста на русском языке, с пунктуацией (?) и Заглавными Буквами";
//IntlChar::chr("A");

//mb_ord("A");
var_dump($str);
var_dump(ru_2_en_converter($str, $alfabet));

function ru_2_en_converter($str, &$cortage){

    for($i=0;$i<mb_strlen($str);++$i){

        $char = mb_substr($str, $i,1);

        if(isLetter($char, $cortage)){

            if(isCapital($char)){

                $newstr .= mb_strtoupper($cortage[mb_strtolower($char)]);
            }else{

                $newstr .= $cortage[mb_strtolower($char)];
            }
        }else{

            $newstr .= $char;
        }
    }
   return $newstr;
}
function isLetter($char, &$alfabet){

    return !is_null($alfabet[mb_strtolower($char)]);
}
function isCapital($char){

    return mb_strtolower($char) !== $char;
}

echo "<br/><br/>Задание 5<br/><br/>";

$str="Некоторый отрывок текста на русском языке с пробелами";
//$str = "Nekotoryy otryvok teksta na russkom yazyke";
var_dump($str);
var_dump(space2underscore($str));

function space2underscore(&$str){

    for($i=0;$i<mb_strlen($str);++$i){

        $char = mb_substr($str, $i,1);

        if(isSpace($char)){

            $newstr .= "_";
        }else{

            $newstr .= $char;
        }
    }

    return $newstr;
}
function isSpace($char){

    return $char === " ";
}

echo "<br/><br/>Задание 6<br/><br/>";

$menus = [

    ["Меню1", "http://site.ru"],
            ["Меню2", "http://site.ru"],
            ["Меню3", "http://site.ru"],
            ["Меню4", "http://site.ru", [
                ["Меню11", "http://site.ru"],
                ["Меню12", "http://site.ru"],
                ["Меню13", "http://site.ru", [
                    ["Меню11", "http://site.ru", [
                        ["Меню11", "http://site.ru"],
                        ["Меню12", "http://site.ru", [
                            ["Меню11", "http://site.ru"],
                            ["Меню12", "http://site.ru"],
                            ["Меню13", "http://site.ru"],
                            ["Меню14", "http://site.ru"]
                        ]],
                        ["Меню13", "http://site.ru"],
                        ["Меню14", "http://site.ru"]
                    ]],
                    ["Меню12", "http://site.ru"],
                    ["Меню13", "http://site.ru"],
                    ["Меню14", "http://site.ru"]
                ]],
                ["Меню14", "http://site.ru"]
            ]]
];

function renderMenu($menuList){

    $menu .= "<ul>";

    for($i=0; $i<count($menuList);++$i){

        $menu .= "<li><a href='{$menuList[$i][1]}'>{$menuList[$i][0]}</a></li>";

        if($menuList[$i][2]){

                $menu .= renderMenu($menuList[$i][2]);
            }


    }

    $menu .= "</ul>";

    return $menu;

}

echo renderMenu($menus);