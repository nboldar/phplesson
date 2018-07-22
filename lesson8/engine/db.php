<?php

function getConnection()
{
    $config = require_once CONFIG_DIR . "db_access.php";
    static $conn = null;
    if (!$conn) {
        $conn = mysqli_connect(
            $config['server'], $config['login'], $config['password'], $config['dbName'], $config['port']
        );
    }
    return $conn;
}

function execute($sql)
{
    return mysqli_query(getConnection(), $sql);
}
function insertAndGetId($sql){
    $conn=getConnection();
    execute($sql);
    return mysqli_insert_id($conn);
}

function queryAll($sql)
{
    $res = execute($sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function queryOne($sql)
{
    return queryAll($sql)[0];
}

function closeConnection()
{
    mysqli_close(getConnection());
}