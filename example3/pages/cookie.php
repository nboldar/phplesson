<?php
/*
if(isset($_COOKIE['test'])){
    echo "такая кука есть!!";
}else{
    setcookie('test','hello', time() +  2 * 60);
}

var_dump($_COOKIE);*/

session_start();
$_SESSION['test'];
var_dump($_SESSION);
