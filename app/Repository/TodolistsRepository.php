<?php
namespace App\Repository;

use App\Interfaces\TodolistsRepoInterface;
use App\Models\Todolist;

class TodolistsRepository implements TodolistsRepoInterface{
    public function getAllTodolist(){
        $todo = Todolist::all();
        return $todo;
    }

    public function createTodolist($TodoData){
        $todo = Todolist::create($TodoData);
        return $todo;
    }

    public function updateTodolist($TodoId, $TodoData){
        $todo = Todolist::find($TodoId);
        $todo->update($TodoData);
        return $todo;
    }

    public function deleteTodolist($TodoId){
        $todo = Todolist::find($TodoId);
        $todo->delete();
        return $todo;
    }

}
