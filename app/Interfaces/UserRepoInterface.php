<?php

namespace App\Interfaces;
interface UserRepoInterface
{

    public function getAllUsers();

    public function createUser($userData);

    public function updateUser($userId, $userData);

    public function deleteUser($userId);

}
