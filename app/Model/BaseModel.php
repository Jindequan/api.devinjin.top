<?php


namespace App\Model;


use AF\Core\Orm\Model;

class BaseModel extends Model
{
    public static $dataBase = '';
    public static $table = '';

    public static function table()
    {
        return static::$table;
    }

    public static function suffix()
    {
        return static::suffix();
    }
}