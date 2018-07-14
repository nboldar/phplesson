<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 11:30
 */
header("Content-Type: text/html; charset=utf8");
include_once __DIR__ .  "/../config/config.php";
require_once ROOT_DIR."../config/db.php";
require_once ENGINE_DIR."render.php";
include_once ROOT_DIR."comment.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $result=$_POST;
    $user_name=$result['user_name'];
    $user_email=$result['user_email'];
    $comment=$result['comment'];
    if(validation($result)==true){
        execute("INSERT INTO comments (user_name, user_email, comment, approval)
 VALUES ('$user_name','$user_email','$comment','no')");
    }else{
        echo "no mother fucker";
    }
}

render('feedback',[

    ]);
