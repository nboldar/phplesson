<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.09.2018
 * Time: 20:50
 */

namespace app\models\repositories;


use app\models\entities\DataEntity;
use app\services\Db;

abstract class Repository
{
    protected $db;

    /**
     * Repository constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getOne(int $id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryObject($sql, [':id' => $id], $this->getEntityClass());
    }

    public function getAll(): array
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAllObjects($sql, $params = [], $this->getEntityClass());
    }

    public function deleteItem(DataEntity $entity)
    {
        $tableName = $this->getTableName();
        $sql = "delete from {$tableName} where id=:id";
        return $this->db->execute($sql, [':id' => $entity->id]);
    }

    private function insert(DataEntity $entity)
    {
        $tableName = $this->getTableName();
        $params = [];
        $placeholders = [];
        $columns = $this->getTableColumns();
        $columnsString = implode(', ', $columns);
        foreach ($columns as $value) {
            if (isset($entity->{$value})) {
                $settedValue = $entity->{$value};
            } else {
                $settedValue = null;
            }
            $params[":{$value}"] = $settedValue;
            array_push($placeholders, ":{$value}");
            $placeholderString = implode(', ', $placeholders);
        }

        $sql = "insert into {$tableName} ({$columnsString}) values ({$placeholderString})";
        $this->db->execute($sql, $params);
        $entity->id = $this->db->lastInsertId();
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

    private function update(DataEntity $entity)
    {
        $params = [];
        $sqlSetParams = [];
        $tableName = $this->getTableName();
        $stateObj = $this->getOne($entity->id);
        foreach ($this as $key => $val) {
            if ($val !== $stateObj->{$key}) {
                $params[":{$key}"] = $val;
                array_push($sqlSetParams, "{$key}=:{$key}");
            }
        }
        $params[":id"] = $entity->id;
        $sqlSetParamsString = implode(', ', $sqlSetParams);
        $sql = "update {$tableName} set {$sqlSetParamsString} where id=:id";
        var_dump($sql);
        $this->db->execute($sql, $params);
    }

    public function save(DataEntity $entity)
    {
        empty($entity->id) ? $this->update() : $this->insert();
    }


    abstract public function getTableName(): string;

    abstract public function getEntityClass(): string;
}