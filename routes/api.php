<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\TodoController;

Route::group(['prefix' => 'v1', 'namespace' => 'v1'], function () {
    Route::get('/allTodo', [TodoController::class, 'getAll']);
    Route::post('/addTodo', [TodoController::class, 'store']);
    Route::put('/updateTodo', [TodoController::class, 'update']);
    Route::delete('/deleteTodo/{id}', [TodoController::class, 'destroy']);
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
