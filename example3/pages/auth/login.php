<?php
header("Content-Type: text/html; charset=utf8");
include __DIR__ .  "/../config/main.twig";
include ENGINE_DIR . "render.php";
require_once ENGINE_DIR .  "db.php";
require_once ENGINE_DIR .  "route.php";
require_once ENGINE_DIR .  "users.php";

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if($user = getUserByLoginPass($login, $pass)){
        $_SESSION["user_id"] = $user['id'];
        redirect('/index.php');
        exit;
    }
    $message = "Неправильный пароль!!!";
}

echo render('login', ['message' => $message]);
