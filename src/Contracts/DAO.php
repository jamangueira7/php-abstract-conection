<?php
namespace App\Contracts;

use App\Model\User;
use PDO;

interface DAO
{
    public function getById(int $id);
    public function getAll();
    public function create(User $user);
    public function update(User $user);
    public function delete(User $user);
}
