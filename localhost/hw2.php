<?php
/*
1.
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
 */

function randomNumber()
{

    if (rand(0, 10) > 5) {

        $x = -rand(0, 4000000000);
    } else {

        $x = rand(0, 4000000000);
    }

    return $x;
}

echo "Задание 1<br/><br/>";
$a = randomNumber();
echo "a = $a <br/>";
$b = randomNumber();
echo "b = $b <br/>";

if ($a >= 0 && $b >= 0) {

    $res = $a - $b;
    echo "Разность " . $res;

} elseif ($a < 0 && $b < 0) {

    $res = $a * $b;
    echo "Умножение " . $res;

} else {
    $res = $a + $b;
    echo "Сложение " . $res;
}

echo "<br/><br/>Задание 2<br/><br/>";

$a = rand(0, 15);
echo "a = $a <br/><br/>";

switch ($a) {

    case 0:
        echo $a++ . "<br/>";
    case 1:
        echo $a++ . "<br/>";
    case 2:
        echo $a++ . "<br/>";
    case 3:
        echo $a++ . "<br/>";
    case 4:
        echo $a++ . "<br/>";
    case 5:
        echo $a++ . "<br/>";
    case 6:
        echo $a++ . "<br/>";
    case 7:
        echo $a++ . "<br/>";
    case 8:
        echo $a++ . "<br/>";
    case 9:
        echo $a++ . "<br/>";
    case 10:
        echo $a++ . "<br/>";
    case 11:
        echo $a++ . "<br/>";
    case 12:
        echo $a++ . "<br/>";
    case 13:
        echo $a++ . "<br/>";
    case 14:
        echo $a++ . "<br/>";
    case 15:
        echo $a++ . "<br/>";

}

echo "<br/><br/>Задание 3<br/><br/>";

function plus($a, $b)
{

    return $a + $b;
}

function minus($a, $b)
{

    return $a - $b;
}

function multiply($a, $b)
{

    return $a * $b;
}

function devide($a, $b)
{

    if ($b === 0) return NULL;

    return $a / $b;
}


echo plus(2, 3) . "<br/>";
echo minus(5, 4) . "<br/>";
echo multiply(3, 4) . "<br/>";
echo devide(3, 6) . "<br/>";

echo "<br/><br/>Задание 4<br/><br/>";

function mathOperation($a, $b, $opertaion)
{

    $res = 0;
    switch ($opertaion) {

        case "plus":
            {

                $res = plus($a, $b);
                break;
            }
        case "minus":
            {

                $res = minus($a, $b);
                break;
            }
        case "multiply":
            {

                $res = multiply($a, $b);
                break;
            }
        case "devide":
            {

                $res = devide($a, $b);
                break;
            }
        default:
            $res = plus($a, $b);
    }
    return $res;
}

echo mathOperation(1, 1, "plus") . "<br/>";
echo mathOperation(5, 3, "minus") . "<br/>";
echo mathOperation(5, 3, "multiply") . "<br/>";
echo mathOperation(5, 3, "devide") . "<br/>";

echo "<br/><br/>Задание 4<br/><br/>";

function renderTamplate($page, $content = '')
{
    ob_start();
    include $page . '.php';
    return ob_get_clean();
}

echo renderTamplate('main', renderTamplate("menu", 'Какое-то содержимое вложенного шаблона'));