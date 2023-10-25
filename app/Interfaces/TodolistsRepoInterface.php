<?php
namespace App\Interfaces;

use App\Models\Todolist;

interface TodolistsRepoInterface{
    public function getAllTodolist();

    public function createTodolist($TodoData);

    public function updateTodolist($TodoId, $TodoData);

    public function deleteTodolist($TodoId);

}
