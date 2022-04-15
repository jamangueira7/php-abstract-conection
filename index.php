<?php
require __DIR__.'/vendor/autoload.php';

use App\Conn\Conn;
use App\Model\User;

$conn = new Conn('mysql');
$user = new User('João', 'Mangueira', 34);
echo "<br>";
$conn = new Conn('mysql');
echo "<br>";
var_dump($user);
