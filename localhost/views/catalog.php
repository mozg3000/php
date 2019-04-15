<h2>Каталог</h2>

<? foreach($imgs as $path): ?>

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
