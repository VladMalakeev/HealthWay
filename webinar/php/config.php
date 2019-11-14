<?php
class DataBase
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            $host = 'localhost';
            $db = 'healthway_db';
//            $user = 'healthway_db';
//            $pass = 'healthway_db';
            $user = 'mysql';
            $pass = 'mysql';
            $charset = 'utf8';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $db = new PDO($dsn, $user, $pass);
            $db->query("SET NAMES utf8");
            self::$instance = $db;
        }
        return self::$instance;
    }

    public function createSubscriber($db){
        $sql = "CREATE TABLE IF NOT EXISTS subscribers(
         id int(11) AUTO_INCREMENT primary key,
         name varchar (255),
         email varchar (255),
         phone varchar (255),
         answer int(11))";

        return $db->exec($sql);
    }


}