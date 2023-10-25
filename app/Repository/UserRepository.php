<?php
namespace App\Repository;
use App\Models\User;
use App\Interfaces\UserRepoInterface;

class UserRepository implements UserRepoInterface
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAllUsers(){
        $user = User::all();
        return $user;
    }

    public function createUser($userData){
        $user = User::create($userData);
        return $user;
    }

    public function updateUser($userId, $userData){
        $user = User::find($userId);
        $user->update($userData);
        return $user;
    }

    public function deleteUser($userId){
        $user = User::find($userId);
        $user->delete();
        return $user;
    }
}


