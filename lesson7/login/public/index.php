<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 17.07.2018
 * Time: 19:32
 */
session_start();
header("Content-Type: text/html; charset=utf8");
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../config/db.php";
require_once ENGINE_DIR . "render.php";
require_once ENGINE_DIR . "users.php";
require_once ENGINE_DIR . "route.php";
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if($user = getUserByLoginPass($login, $pass)){
        $_SESSION["user_id"] = $user['id'];
        redirect('/cabinet.php');
        exit;
    }
    $message = "Неправильный пароль!!!";
}

echo renderTemplate('login', ['message' => $message]);


