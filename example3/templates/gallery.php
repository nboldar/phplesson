<?php foreach ($files as $img):?>
    <a href="/photo.php?id=<?=$img['id']?>">
        <img width="100" src="/img/small/<?=$img['path']?>" alt="">
    </a>
<?php endforeach;?>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'img'>
    <input type="submit">
</form>