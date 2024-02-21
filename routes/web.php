<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\UserController;
use App\Models\About;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//Perum

Route::get('/', [PerumahanController::class, 'index']);
Route::get('/detail/{id_perum}', [AboutController::class, 'index']);
Route::get('/dashboard-admin', [DashboardController::class, 'index']);
Route::post('/add-perum', [DashboardController::class, 'addPerum']);
Route::get('/add-perum', [DashboardController::class, 'form']);
Route::delete('/delete-perum/{id}', [DashboardController::class, 'deletePerum']);
Route::get('/edit-perum/{id}', [DashboardController::class, 'editPerum']);
Route::post('/edit-perum/{id}', [DashboardController::class, 'updatePerum']);

// Auth

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/update-password', [AuthController::class, 'formchangePass']);
Route::post('/update-password', [AuthController::class, 'changePassword']);

//Developer

Route::get('/add-dev', [DashboardController::class, 'formDev']);
Route::get('/edit-dev/{id}', [DashboardController::class, 'editPers']);
Route::post('/edit-dev/{id}', [DashboardController::class, 'updateDev']);
Route::post('/add-dev', [DashboardController::class, 'addDev']);
Route::get('/list-dev', [DashboardController::class, 'listDev']);
Route::delete('/delete-pers/{id}', [DashboardController::class, 'deletePers']);

//User

Route::get('/list-user', [UserController::class, 'index']);
Route::get('/add-user', [UserController::class, 'addUser']);
Route::get('/edit-user/{id}', [UserController::class, 'editUser']);
Route::post('/add-user', [UserController::class, 'createUser']);
Route::post('/edit-user/{id}', [UserController::class, 'updateUser']);
Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser']);
Route::post('/resetpassuser/{id}', [UserController::class, 'resetPass']);
