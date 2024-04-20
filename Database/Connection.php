<?php
declare(strict_types=1);

namespace Database;

class Connection
{

    const HOST = 'localhost';
    const DB_NAME = 'vehicle_registration';
    const USERNAME = 'root';
    const PASSWORD = '';

    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = new \PDO('mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME, self::USERNAME, self::PASSWORD);
    }

    public function getConnection(): \PDO
    {
        return $this->connection;
    }

//    public function destroy()
//    {
//        $this->connection = null;
//    }

}