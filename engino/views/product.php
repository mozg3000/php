
<?//= var_dump($product_name);?>
<div>
    <img src="<?= GALLERY_DIR . 'big/' . $img?>" alt="" style="width: 350px">
    <h4>
        <?=$product_name?>
    </h4>
        <p>
            <?=$description?>
        </p>
<!--    --><?//=$id?>
</div>
<p>
    Дообавте свой отзыв
</p>
<form action="/product/add" method="post">
    <input type="hidden" value="<?=$id?>" name="id">
    <input type="text" placeholder="Ваше имя" name="name"><br>
    <textarea name="feedback" id="feedback1" cols="30" rows="10" placeholder="Ваш отзыв">
    </textarea><br>
    <input type="submit" value="Отправить">
</form>
<h3>
    Отзывы
</h3>
<hr>
<?//=var_dump($feedback);die();?>
<?foreach ($feedback as $feed):?>
<h3>
    <?=$feed['sender']?>
</h3>
<p>
    <?=$feed['message']?>
</p>
    <hr>
<?endforeach;?>
