<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 21:33
 */
header("Content-Type: text/html; charset=utf8");
include_once __DIR__ . "/../config/config.php";
require_once ENGINE_DIR . "render.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $res = $_POST;

}
function validation(array $dataArray)
{
    foreach ($dataArray as $key => $val) {
        if ($key == "user_name" and !preg_match("/[a-zA-Z]/", $val)) {

            return false;
        }
        if ($key == "user_email" and !preg_match("/[\da-z@\._-]+/", $val)) {

            return false;
        }
        if ($key == "comment" and $val == "") {

            return false;
        }
    }
    return true;
}

function renderAllComments()
{
    $res = queryAll("SELECT * FROM comments");
    foreach ($res as $val) {
        render('comment_temp', [
            'id' => $val['id'],
            'user_name' => $val['user_name'],
            'user_email' => $val['user_email'],
            'comment' => $val['comment']
        ]);
    }
}