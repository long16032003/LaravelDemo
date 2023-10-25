<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


use Illuminate\Support\Facades\DB;


Route::get('/', [UserController::class, 'get']);


// Route::post('/users', [UserController::class, 'create']);
// Route::get('/users', [UserController::class, 'getAll']);
// Route::delete('/users/{id}', [UserController::class, 'destroy']);
// Route::put('/users/{id}', [UserController::class, 'update']);

Route::post('/todolists', [TodolistController::class, 'create']);
Route::get('/todolists', [TodolistController::class, 'getAll']);
Route::delete('/todolists/{id}', [TodolistController::class, 'destroy']);
Route::put('/todolists/{id}', [TodolistController::class, 'update']);


Route::match(['get', 'post'], '/yourpath', function () {
    // ...đường dẫn này đáp ứng 2 responds get và post
});

Route::any('/yourpath', function () {
    // ...đường dẫn này đáp ứng tất cả responds
});


// Route::get('/ping', function (Request  $request) {
//         $connection = DB::connection('mongodb');
//         $msg = 'MongoDB is accessible!';
//         try {
//             $connection->command(['ping' => 1]);
//         } catch (\Exception  $e) {
//             $msg = 'MongoDB is not accessible. Error: ' . $e->getMessage();
//         }
//         return ['msg' => $msg];
//     });
// Route::apiResource('posts',\App\Http\Controllers\UserController::class);
