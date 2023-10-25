<?php
namespace App\Services;

use App\Interfaces\UserServiceInterface;
use App\Repository\UserRepository;

class UserService implements UserServiceInterface
{
    protected  $user;

    public function __construct(UserRepository $user)   //Denpendency Inheritan
    {
        $this->user = $user;
    }

    public function getAll(){
        return $this->user->getAllUsers();
    }

    public function create($userData){
        return $this->user->createUser($userData);
    }

    public function update($userId, $userData){
        return $this->user->updateUser($userId,$userData);
    }

    public function delete( $userId){
        return $this->user->deleteUser($userId);
    }
}
