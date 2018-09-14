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

    public function getOne(int $id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll(): array
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    public function deleteItem(int $id)
    {
        $tableName = $this->getTableName();
        $sql = "delete from {$tableName} where id={$id}";
        return $this->db->execute($sql);
    }

    public function insertItems(array $values)
    {
        $stringForValues = null;
        $tableColumnsString = $this->getTableColumns();
        var_dump($tableColumnsString);

        $arrT = explode(',', $tableColumnsString);
        $quantityOfParams = count($arrT);
        var_dump($quantityOfParams);
        for ($i = 0; $i < $quantityOfParams; $i++) {
            if ($i === ($quantityOfParams - 1)) {
                $stringForValues .= "'{$values[$i]}'";
            } else {
                $stringForValues .= "'{$values[$i]}',";
            }

        }
        $tableName = $this->getTableName();
        $sql = "insert into {$tableName} ({$tableColumnsString}) values ({$stringForValues}) ;";
        var_dump($sql);
        return $this->db->execute($sql);
    }

    private function getTableColumns()
    {
        $tableName = $this->getTableName();
        $sql = "show columns from {$tableName}";
        $arr = $this->db->queryAll($sql);
        $newArr = [];
        foreach ($arr as $value) {
            if ($value->Field !== 'id') {
                array_push($newArr, $value->Field);
            }
        }
        return implode(',', $newArr);
    }

    public function updateItem(int $id, string $columnName, $value)
    {
        $tableName = $this->getTableName();
        $sql = "update {$tableName} set {$columnName} = '{$value}' where id={$id}";
        return $this->db->execute($sql);
    }
}