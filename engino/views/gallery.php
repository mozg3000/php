<h2>Изображения</h2>

<? foreach ($pictures as $img): ?>
<!--    --><?//var_dump($img['path'])?>
   <a href="/picture/?id=<?=$img['id']?>">
       <p>
           <?=$img['name']?>
       </p>
       <img src="<?=$img['path']?>" alt="">
   </a>

<?endforeach;?>