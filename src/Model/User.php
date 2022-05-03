<?php
namespace App\Model;

class User
{
    public function __construct(
        private string $name,
        private string $last_name,
        private int $old,
        private int $id
    ){}

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getOld()
    {
        return $this->old;
    }

    public function getLastname()
    {
        return $this->last_name;
    }
}
