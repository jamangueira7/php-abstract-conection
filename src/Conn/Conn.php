<?php
namespace App\Conn;

use App\Contracts\Database;

class Conn
{
    public $adapter;

    public function __construct(Database $adapter)
    {
        $this->adapter = $adapter;
    }
}
