<?php
namespace App\Services;

use App\Interfaces\UserServiceInterface;
use App\Repository\TodolistsRepository;

class TodolistsService implements UserServiceInterface
{
    protected  $todo;

    public function __construct(TodolistsRepository $todo)   //Denpendency Inheritan
    {
        $this->todo = $todo;
    }

    public function getAll(){
        return $this->todo->getAllTodolist();
    }

    public function create($todoData){
        return $this->todo->createTodolist($todoData);
    }

    public function update($todoId, $todoData){
        return $this->todo->updateTodolist($todoId,$todoData);
    }

    public function delete( $todoId){
        return $this->todo->deleteTodolist($todoId);
    }
}
