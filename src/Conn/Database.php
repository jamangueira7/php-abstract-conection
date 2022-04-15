<?php
namespace App\Conn;

use App\Contracts\IDatabase;

class Database
{
    protected $adapter;

    public function __construct(IDatabase $adapter)
    {
        $this->adapter = $adapter;
    }
}
