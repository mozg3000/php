<h2>Изображения</h2>

<? foreach ($pictures as $img): ?>
<!--    --><?//var_dump($img['path'])?>
   <a href="/picture/?name=<?=$img['name']?>">
       <p>
           <?=$img['name']?>
       </p>
       <img src="<?=$img['path'] . $img['name']?>" alt="">
   </a>

<?endforeach;?>