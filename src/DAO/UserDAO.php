<?php
declare(strict_types=1);

namespace App\DAO;

use App\Contracts\DAO;
use App\Model\User;
use PDO;

class UserDAO implements DAO
{
    private PDO $pdo;

    private function __construct(){}

    public static function createFromPDO(PDO $pdo): self
    {
        $dao = new self();
        $dao->pdo = $pdo;

        return $dao;
    }

    public function getById(int $id)
    {
        $slq = $this->pdo->prepare("SELECT * FROM users WHERE id=?");
        $slq->bindParam(1, $id);
        $slq->execute();
        return $slq->fetch(\PDO::FETCH_ASSOC);
    }

    public function getAll()
    {
        $slq = $this->pdo->prepare("SELECT * FROM users");
        $slq->execute();
        return $slq->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create(User $user)
    {
        $slq = $this->pdo->prepare("INSERT INTO users(name, last_name, old) VALUES(?, ?, ?)");
        $slq->bindParam(1, $user->getName());
        $slq->bindParam(2, $user->getLastname());
        $slq->bindParam(3, $user->getOld());
        $slq->execute();
    }

    public function update(User $user)
    {
        $slq = $this->pdo->prepare("UPDATE users SET name=?, last_name=?, old=? WHERE id = ?");
        $slq->bindParam(1, $user->getName());
        $slq->bindParam(2, $user->getLastname());
        $slq->bindParam(3, $user->getOld());
        $slq->bindParam(4, $user->getId());
        $slq->execute();
    }

    public function delete(User $user)
    {
        $slq = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        $slq->bindParam(1, $user->getId());
        $slq->execute();
    }
}
