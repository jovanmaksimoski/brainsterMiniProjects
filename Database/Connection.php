<?php


namespace Database;

class Connection
{

    const  HOST = 'localhost';
    const  DB_NAME = 'dynamic_web';
    const  USERNAME = 'root';
    const  PASSWORD = '';

    protected \PDO $connection;



    public function __construct() {
        $this->connection = new \PDO('mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME, self::USERNAME, self::PASSWORD);
    }

    public function getConnection() {
        return $this->connection;
    }




}