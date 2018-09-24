<?php
namespace app\models\repositories;

use app\models\entities\DataEntity;
use app\services\Db;

class RepositoryException extends \Exception{}
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

    /**
     * @param int $id
     * @return static
     */
    public function getOne(int $id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryObject($sql, [':id' => $id], $this->getEntityClass());
    }

    /**
     * TODO доделать воззвращение объектов
     * @return static[]
     */
    public function getAll(): array
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    public function delete(DataEntity $entity)
    {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return $this->db->execute($sql, [":id" => $entity->id]);
    }


    //INSERT INTO products(id, name,description...) VALUES (:id, :name......)
    public function insert(DataEntity $entity)
    {
        $params = [];
        $columns = [];

        foreach ($entity as $key => $value){
            /**TODO решшить проблемы со служебнными полями */
            if($key == 'db'){
                continue;
            }

            $params[":{$key}"] = $value;
            $columns[] = "`{$key}`";
        }

        $columns = implode(", ", $columns);
        $placeholders = implode(", ", array_keys($params));
        $tableName = static::getTableName();
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$placeholders})";
        $this->db->execute($sql, $params);
        $this->id = $this->db->lastInsertId();
    }

    /**
     * TODO сделать по аналогии с INSERT
     * TODO сохранять ттолько иззменненнные поля
     */
    public function update()
    {

    }

    /** TODO */
    public function save(){

    }

    abstract public function getTableName(): string ;


}