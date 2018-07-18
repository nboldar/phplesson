<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 17.07.2018
 * Time: 23:17
 */
session_start();
header("Content-Type: text/html; charset=utf8");
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../config/db.php";
require_once ENGINE_DIR . "render.php";

$user_id=$_SESSION['user_id'];
$user=queryOne("SELECT *FROM user WHERE id='{$user_id}'");
echo renderTemplate('cabinet', ['user' => $user]);