<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\{
    UserController,
    VehicleController,
};

use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/users/{user}/vehicles', VehicleController::class);

Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/', function(){
return response()->json(['message' => 'ok!']);
});
