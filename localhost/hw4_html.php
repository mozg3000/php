<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?header("Location: http://localhost/hw4.php");?>
</head>
<body>

<? foreach($imgs_path as $path): ?>

    <a href="<?=IMGS_DIR . '/big/' . $path?>" target="_blank">
<!--    <a href="hw4_single_html.php?path=--><?//=IMGS_DIR . '/big/' . $path?><!--" target="_blank">-->
        <img src="<?= IMGS_DIR . "small/" . $path?>" alt="" ><br/>
    </a>
<!--    <?//var_dump(IMGS_DIR . $path)?>-->

<? endforeach;?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="rfile">
    <input type="submit" name="load" value="Загрузить">
</form>

</body>
</html>