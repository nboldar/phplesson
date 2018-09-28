<?php
namespace app\models\repositories;

use app\base\App;
use app\models\entities\DataEntity;
use app\services\Db;

class RepositoryException extends \Exception{}
abstract class Repository
{
    /** @var Db */
    protected $db;

    /**
     * Repository constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = App::call()->db;
    }

    /**
     * @param int $id
     * @return static
     */
    public function getOne(int $id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->find($sql, [':id' => $id])[0];
    }

    /**
     * TODO доделать воззвращение объектов
     * @return static[]
     */
    public function getAll()
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->find($sql, []);
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

    public function update(DataEntity $entity)
    {

    }

    public function save(DataEntity $entity){
        if(is_null($entity->id)){
            $this->insert($entity);
        }else{
            $this->update($entity);
        }
    }

    public function find($sql, $params)
    {
        return $this->db->queryObject($sql, $params, $this->getEntityClass());
    }

    abstract public function getTableName(): string ;

    abstract public function getEntityClass(): string ;
}