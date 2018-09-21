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
        $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
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

    /**
     * @param $sql
     * @param array $params
     * @return mixed
     */
    public function queryOne($sql, $params = [])
    {
        return $this->queryAll($sql, $params)[0];
    }

    /**
     * @param $sql
     * @param array $params
     * @param $class
     * @return array
     */
    public function queryAllObjects($sql, $params = [], $class)
    {
        $smtp = $this->query($sql, $params);
        $smtp->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class);
        return $smtp->fetchAll();
    }

    public function queryObject($sql, $params = [], $class)
    {
        return $this->queryAllObjects($sql, $params, $class)[0];
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
    public function lastInsertId()
    {
        return $this->getConnection()->lastInsertId();
    }

}