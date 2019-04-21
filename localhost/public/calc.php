<?php
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

    if ((int)$b === 0) return NULL;

    return $a / $b;
}
//var_dump($_POST);
if (isset($_POST['doMath'])) {
    extract($_POST);
//    var_dump($left,$right);
//    var_dump($op);
    switch($op) {

        case 'сложение':
            {
                $res = plus($left, $right);
                break;
            };
        case 'вычитание':
            {
                $res = minus($left, $right);
                break;
            };
        case 'умножение':
            {
                $res = multiply($left, $right);
                break;
            };
        case 'деление':
            {
                if(!$res = devide($left, $right)){
                    $res="Деление на нуль";
                };
                break;
            };
    }
    header("Location: ?left=$left&right=$right&res=$res");
}else{
    $res='';
    $left='';
    $right='';
}
?>

<form action="" method="post">
    <input type="text" name="left" value="<?=$_GET['left']?>"><br>
    <input type="text" name="right" value="<?=$_GET['right']?>"><br>
    <select name="op" id="op1">
        <option >
            сложение
        </option>
        <option ">
            вычитание
        </option>
        <option>
            умножение
        </option>
        <option>
            деление
        </option>
    </select><br>
    <input type="text" name="res" value="<?=$_GET['res']?>"><br>
    <input type="submit" name="doMath">
</form>
