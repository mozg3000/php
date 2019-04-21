<h2>Изображения</h2>

<? foreach ($catalog as $product): ?>

    <a href="/product/?id=<?=$product['id']?>"  style="display: inline-block;">

        <div style="display: inline-block;border: 1px solid; margin: 5px">
            <img src="<?= GALLERY_DIR . 'small/' . $product['img']?>" alt="">
            <h4>
                <?=$product['product_name']?>
            </h4>
        </div>
    </a>

<?endforeach;?>