<h2>Изображения</h2>

<? foreach ($catalog as $product): ?>

    <a href="/product/<?=$product['id']?>"  style="display: inline-block;">

        <div style="display: inline-block;border: 1px solid; margin: 5px">
            <form action="/cart/add/<?=$product['id']?>/" method="post">
                <img src="<?= GALLERY_DIR . 'small/' . $product['img']?>" alt="">
                <h4>
                    <?=$product['product_name']?>
                </h4>
                <p>
                    <?=$product['price']?> руб.
                </p>
                <input type="submit" name="buy" value="В корзину">
            </form>
        </div>
    </a>

<?endforeach;?>