<?php

namespace app\services;


class Db
{
    private $conn = null;
    private $config;

    /**
     * Db constructor.
     * @param $config
     */
    public function __construct($driver, $host, $login, $password, $database, $charset = "utf8",$port)
    {
        $this->config['driver'] = $driver;
        $this->config['host'] = $host;
        $this->config['login'] = $login;
        $this->config['password'] = $password;
        $this->config['database'] = $database;
        $this->config['charset'] = $charset;
        $this->config['port'] = $port;
    }


    private function getConnection()
    {
        if (is_null($this->conn)) {
            $this->conn = new \PDO($this->prepareDsnString(), $this->config['login'], $this->config['password']);
        }
        $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $this->conn;
    }

    private function prepareDsnString()
    {
        return sprintf("%s:host=%s;port=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['port'],
            $this->config['database'],
            $this->config['charset']
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