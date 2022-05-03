<?php
namespace App\Conn;

use App\Contracts\Database;

class ConnectionFactory
{

    public static function create(Database $adapter)
    {
        return $adapter->connect();
    }
}
