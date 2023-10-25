<?php
namespace App\Interfaces;

interface UserServiceInterface
{
    public function getAll();

    public function create($userData);

    public function update($userId, $userData);

    public function delete($userId);


}
