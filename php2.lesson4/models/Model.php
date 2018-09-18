<?php

namespace app\models;

use app\services\Db;


abstract class Model implements \app\interfaces\IModel
{
    protected $db;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public static function getOne(int $id): object
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, [':id' => $id], get_called_class());
    }

    public static function getAll(): array
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAllObjects($sql, $params = [], get_called_class());
    }

    public function deleteItem()
    {
        $tableName = $this->getTableName();
        $sql = "delete from {$tableName} where id=:id";
        return $this->db->execute($sql, [':id' => $this->id]);
    }

    private function insert()
    {
        $tableName = $this->getTableName();
        $params = [];
        $placeholders = [];
        $columns = $this->getTableColumns();
        $columnsString = implode(', ', $columns);
        foreach ($columns as $value) {
            if (isset($this->{$value})) {
                $settedValue = $this->{$value};
            } else {
                $settedValue = null;
            }
            $params[":{$value}"] = $settedValue;
            array_push($placeholders, ":{$value}");
            $placeholderString = implode(', ', $placeholders);
        }

        $sql = "insert into {$tableName} ({$columnsString}) values ({$placeholderString})";
        $this->db->execute($sql, $params);
        $this->id = $this->db->lastInsertId();
    }

    private function getTableColumns(): array
    {
        $tableName = $this->getTableName();
        $sql = "show columns from {$tableName}";
        $arr = $this->db->queryAll($sql);
        $newArr = [];
        foreach ($arr as $value) {
            array_push($newArr, $value['Field']);
        }
        return $newArr;
    }

    private function update()
    {
        $params = [];
        $sqlSetParams = [];
        $tableName = $this->getTableName();
        $stateObj = Product::getOne($this->id);
        foreach ($this as $key => $val) {
            if ($val !== $stateObj->{$key}) {
                $params[":{$key}"] = $val;
                array_push($sqlSetParams, "{$key}=:{$key}");
            }
        }
        $params[":id"] = $this->id;
        $sqlSetParamsString = implode(', ', $sqlSetParams);
        $sql = "update {$tableName} set {$sqlSetParamsString} where id=:id";
        var_dump($sql);
        $this->db->execute($sql, $params);
    }

    public function save()
    {
        isset($this->id) ? $this->update() : $this->insert();
    }
}