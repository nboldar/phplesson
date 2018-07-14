<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 11:30
 */
header("Content-Type: text/html; charset=utf8");
include __DIR__ .  "/../config/config.php";
require ENGINE_DIR."render.php";
require ENGINE_DIR."count.php";
render('calc', [
    'result'=>$result,
]);
