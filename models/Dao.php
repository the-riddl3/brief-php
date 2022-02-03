<?php
namespace Products\models;

interface Dao
{
    public static function get($primary);
    public static function all();
    public static function save($item);
    public static function update($primary,array $params);
    public static function delete($primary);
}