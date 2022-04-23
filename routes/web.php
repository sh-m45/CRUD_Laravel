<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats', [CatController::class, 'index'])->middleware('auth');
Route::get('/cats/show/{id}', [CatController::class,'show']);
Route::get('/cats/create', [CatController::class, 'create']);
Route::post('/cats/store', [CatController::class, 'store']);
Route::get('/cats/edit/{id}', [CatController::class, 'edit']);
Route::post('/cats/update/{id}', [CatController::class, 'update']);
Route::get('/cats/delete/{id}', [CatController::class, 'delete']);
Route::get('/cats/create', [CatController::class, 'tableShow'])->middleware('auth');


Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);