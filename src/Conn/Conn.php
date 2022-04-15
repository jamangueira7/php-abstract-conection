<?php
namespace App\Conn;

class Conn
{
    public function __construct(string $database)
    {

        if($database == 'mysql') {
            $my = new MySQL();
            $db = $my->connect();
        }

        new Database($db);
    }
}
