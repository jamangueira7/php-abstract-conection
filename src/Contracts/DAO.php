<?php
namespace App\Contracts;

use App\Model\User;

interface DAO
{
    public static function setConnection(Database $conn);
    public static function select(int $id);
    public static function create(User $user);
    public static function update();
    public static function delete();
}
