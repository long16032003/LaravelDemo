<?php

namespace App\Http\Controllers;

use App\Http\Validation\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    //
    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function create(StoreRequest $request)
    {
        // $car = Cars::create($request->all());
        // return
        $userData = $request->only(['username', 'password']);
        $user = $this->user->create($userData);
        return response()->json($user, 201);
    }
    public function getAll(Request $request)
    {
        $userData = $request->all();
        $car = $this->user->getAll($userData);
        return response()->json($car, 201);
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
    public function show(User $user)
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
    public function update(Request $request)
    {
        // $cardata = $request->all();
        $userId = $request->route('id');
        $res = $this->user->update($request->all(), $userId);
        return $res;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $userId)
    {
        $res = $this->user->delete($userId);
        return $res;
    }
}
