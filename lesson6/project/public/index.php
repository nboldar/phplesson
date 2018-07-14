<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 11:30
 */
header("Content-Type: text/html; charset=utf8");
require_once __DIR__ .  "/../config/config.php";
require_once __DIR__ .  "/../config/db.php";
require_once ENGINE_DIR."render.php";
require_once ENGINE_DIR."route.php";
require_once ENGINE_DIR."getProductData.php";

render('product', []);
