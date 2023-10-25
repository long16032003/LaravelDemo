<?php

namespace App\Http\Controllers;

use App\Services\TodolistsService;
use Illuminate\Http\Request;
use App\Http\Validation\StoreRequestTodolists;
use App\Models\Todolist;

class TodolistController extends Controller
{
    protected $todo;

    public function __construct(TodolistsService $todo)
    {
        $this->todo = $todo;
    }

    public function create(StoreRequestTodolists $request)
    {
        // $car = Cars::create($request->all());
        // return
        $todoData = $request->only(['text', 'complete']);
        $todo = $this->todo->create($todoData);
        return response()->json($todo, 201);
    }
    public function getAll(Request $request)
    {
        $todoData = $request->all();
        $todo = $this->todo->getAll($todoData);
        return response()->json($todo, 201);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todolist $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,String $todoId)
    {
        $res = $this->todo->update($todoId, $request->all());
        return $res;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $todoId)
    {
        $res = $this->todo->delete($todoId);
        return $res;
    }
}
