<?php
require __DIR__.'/vendor/autoload.php';

use App\Conn\Conn;
use App\Conn\MySQL;
use App\Model\User;
use App\DAO\UserDAO;

$conn = new Conn(new MySQL());
$user = new User('João', 'Mangueira', 34);
echo "<br>";

UserDAO::setConnection($conn->adapter);
UserDAO::create($user);
var_dump(UserDAO::select(1));

var_dump($user);
