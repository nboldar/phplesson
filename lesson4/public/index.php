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
require ENGINE_DIR . "render.php";
require ENGINE_DIR . "funcImgResize.php";

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
    <?php renderImg(); ?>
</div>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
</body>
</html>

