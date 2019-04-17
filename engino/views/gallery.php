<h2>Изображения</h2>

<? foreach ($pictures as $img): ?>
    //<?var_dump($img['name'])?>
   <a href="/picture/?name=<?=$img['name']?>">

       <img src="<?=$img['path'] . $img['name']?>" alt="">
   </a>

<?endforeach;?>