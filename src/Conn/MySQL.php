<?php
namespace App\Conn;

use App\Contracts\Database;

class MySQL implements Database
{
    public function __construct(
        private string $dbname = "test_conn",
        private string $host = "localhost",
        private string $user = "root",
        private string $pass = "",
    ){}

    public function connect()
    {
        try {
            $connect = new \PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->user, $this->pass);
            $connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Error! ". $e->getMessage() . $e->getCode();
            exit;
        }

        return $connect;
    }
}
