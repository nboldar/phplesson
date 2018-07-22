<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 06.07.2018
 * Time: 9:19
 * domain: "http://img.loc"
 * // */
header('Content-type: text/html; charset=utf-8');
require __DIR__ . '/../config/config.php';
include ENGINE_DIR . "render.php";
include ENGINE_DIR . "funcImgResize.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $img=$_FILES['file'];

    if ($img['type'] <> 'image/jpeg') {
        echo "Только картинки с расширением .jpg";
    }elseif ($img['size'] > 100000){
        echo "превышен размер загружаемого файла";
    }else{
        uploadImg($img);
        echo "<script>window.location.href=product.phpp'</script>";
        var_dump($_FILES['file']['name']);
    }
}

?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        img {
            width: 100px;
            height: auto;
            margin: 10px;
        }
    </style>
    <title>Image</title>
</head>
<body>
<div>
    <?php renderImg(); ?>
</div>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <input type="submit" name="upload" value="Upload">
</form>
<form action="./photo.php"  method="GET" target="_blank">
    <input type="number" name="img-id" placeholder="введите id">
    <input type="submit" name="submit_id" value="запросить картинку с этим id">
</form>
</body>
</html>

