<?php
namespace app\interfaces;
interface IModel
{
    public function getOne(int $id): \app\models\Model;

    public function getAll(): array ;

    public function getTableName(): string ;
}