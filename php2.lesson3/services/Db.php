<?php

namespace app\services;
use app\traits\TSingleton;

class Db
{
    use TSingleton;
    private $conn = null;


    private function getConnection()
    {
        if (is_null($this->conn)) {
            $this->conn = new \PDO($this->prepareDsnString(), LOGIN, PASSWORD);
        }
        $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        return $this->conn;
    }

    private function prepareDsnString()
    {
        return sprintf("%s:host=%s;port=%s;dbname=%s;charset=%s",
            DRIVER, HOST, PORT, DB, CHARSET
        );
    }

    private function query($sql, $params = [])
    {
        $pdoStatement = $this->getConnection()->prepare($sql);
        $pdoStatement->execute($params);
        return $pdoStatement;
    }

    public function queryOne($sql, $params = [])
    {

        return $this->queryAll($sql, $params)[0];
    }

    public function queryAll($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchAll();
    }

    public function execute($sql, $params = [])
    {
        $this->query($sql, $params);
        return true;
    }

}