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

Route::group([
    'middleware' => ['jwt.verify'],
    'prefix' => 'v1'
], function ($router) {

Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');

Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout'])->name('logout');

Route::post('refresh', [\App\Http\Controllers\Api\AuthController::class, 'refresh'])->name('refresh');

Route::post('me', [\App\Http\Controllers\Api\AuthController::class, 'me'])->name('me');

Route::apiResource('/users/{user}/vehicles', VehicleController::class);

Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user', [UserController::class, 'index']);
});
Route::get('/', function(){
return response()->json(['message' => 'ok!']);
});
