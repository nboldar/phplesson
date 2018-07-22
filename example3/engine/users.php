<?php

function getUserByLoginPass($login, $pass){
    return queryOne(
        "SELECT * FROM users WHERE login = '{$login}' AND password = '{$pass}'"
    );
}

function getUserById($id){
    return queryOne(
        "SELECT * FROM users WHERE id = {$id}"
    );
}
