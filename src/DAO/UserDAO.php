<?php
namespace App\DAO;

use App\Contracts\DAO;
use App\Contracts\Database;
use App\Model\User;

class UserDAO implements DAO
{
    protected static $pdo = null;

    public static function setConnection(Database $database)
    {
        self::$pdo = $database->connect();
    }

    public static function select(int $id)
    {
        $slq = self::$pdo->prepare("SELECT * FROM users WHERE id=?");
        $slq->bindParam(1, $id);
        $slq->execute();
        return $slq->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create(User $user)
    {
        $slq = self::$pdo->prepare("INSERT INTO users(name, last_name, old) VALUES(?, ?, ?)");
        $slq->bindParam(1, $user->getName());
        $slq->bindParam(2, $user->getLastname());
        $slq->bindParam(3, $user->getOld());
        $slq->execute();
    }

    public static function update()
    {

    }

    public static function delete()
    {

    }
}
