<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.09.2018
 * Time: 20:50
 */

namespace app\models\repositories;


use app\models\entities\DataEntity;
use app\base\App;

abstract class Repository
{
    protected $db;

    /**
     * Repository constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = App::call()->db;
    }

    public function getByParamName($paramName, $paramValue)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE {$paramName} = :{$paramName}";
        return $this->db->queryObject($sql, [":{$paramName}" => $paramValue], $this->getEntityClass());
    }

    public function getBySomeIds(array $ids)
    {
        $tableName = static::getTableName();
        $transformForPattern = function ($a) {
            return ":id" . $a;
        };
        $patternsArray = array_map($transformForPattern, $ids);

        $patternsArrayString = implode(", ", array_values($patternsArray));
        $sql = "SELECT * FROM {$tableName} WHERE id in({$patternsArrayString})";
        $params = [];
        foreach ($ids as $value) {
            $params[":id" . $value] = $value;
        }
        return $this->db->queryAllObjects($sql, $params, $this->getEntityClass());

    }


    public function getOne($id)
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
        }

        $placeholderString = implode(', ', $placeholders);
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
        $this->db->execute($sql, $params);
    }

    public function save(DataEntity $entity)
    {
        empty($entity->id) ? $this->insert($entity) : $this->update($entity);
    }


    abstract public function getTableName(): string;

    abstract public function getEntityClass(): string;
}