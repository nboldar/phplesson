<?php
namespace app\interfaces;

interface IDbModel
{
    public static function getOne(int $id);

    public static function getAll(): array ;

    public static function getTableName(): string ;
}