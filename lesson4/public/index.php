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
//echo ROOT_DIR."<br>";
require ENGINE_DIR . "render.php";
require ENGINE_DIR . "funcImgResize.php";
//var_dump(img_resize($src, $dest, $width, $height));
//var_dump(ENGINE_DIR);
//var_dump(scandir(ROOT_DIR . '/img/min/'));
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    getNextImg($_FILES['file']);
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
    <!--    <a href="http://img.loc/img/max/1.jpg" class="img" target="_blank">-->
    <!--    <img src="./img/min/1.min.jpg" alt="image"></a>-->
    <!--    <a href="http://img.loc/img/max/2.jpg" class="img" target="_blank">-->
    <!--        <img src="./img/min/2.min.jpg" alt="image"></a>-->
    <!--    <a href="http://img.loc/img/max/3.jpg" class="img" target="_blank">-->
    <!--        <img src="./img/min/3.min.jpg" alt="image"></a>-->
    <!--    <a href="http://img.loc/img/max/4.jpg" class="img" target="_blank">-->
    <!--        <img src="./img/min/4.min.jpg" alt="image"></a>-->
    <?php renderImg(); ?>
</div>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
</body>
</html>
