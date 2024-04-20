<?php
declare(strict_types=1);

namespace Classes;

require_once(__DIR__ . "/../Database/Connection.php");

use Database\Connection as Connection;


class Admin
{
    protected string $username;
    protected string $password;


    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    public function store(): void
    {
        $connectionObj = new Connection();
        $connection = $connectionObj->getConnection();

        $statement = $connection->prepare('INSERT INTO
                            `admin` ( `username`, 
                                     `password`)
                            VALUES ( :username, 
                                    :password)
                        ');

        $admin = [
            'username' => $this->username,
            'password' => password_hash($this->password, PASSWORD_DEFAULT)
        ];

        $statement->execute($admin);
    }

    public function authenticateAdmin(\PDO $dbConnection): bool
    {


        $connectionObj = new Connection();
        $connection = $connectionObj->getConnection();

        $statement = $connection->prepare('SELECT * FROM admin WHERE username = :username');
        $statement->bindParam(':username', $this->username, \PDO::PARAM_STR);
        $statement->execute();

        $admin = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!empty($admin) && password_verify($this->password, $admin['password'])) {
            return true;
        }

        return false;

    }


}