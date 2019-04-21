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
extract($_POST);
if (isset($_POST['plus'])) {
    $res = plus($left, $right);
    header("Location: ?left=$left&right=$right&res=$res");
}elseif ($_POST['minus']){

    $res = minus($left, $right);
    header("Location: ?left=$left&right=$right&res=$res");
}elseif ($_POST['multiply']){

    $res = multiply($left, $right);
    header("Location: ?left=$left&right=$right&res=$res");
}elseif ($_POST['devide']){

    if(!$res = devide($left, $right)){
        $res = 'Деление на нуль';
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
    <input type="submit" name="plus" value="+">
    <input type="submit"name="minus" value="-">
    <input type="submit" name="multiply" value="*">
    <input type="submit" name="devide" value="/"><br>
    <input type="text" name="res" value="<?=$_GET['res']?>"><br>
</form>
