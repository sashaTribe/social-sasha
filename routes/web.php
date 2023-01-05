<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;

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


Route::get('/users', [UserDataController::class, 'index']);
Route::get('/users/{id}', [UserDataController::class, 'show'])
    ->name('users.show');
Route::get('/users',[UserDataController::class, 'create'])->name('users.create');
Route::post('/users',[UserDataController::class, 'store'])->name('users.store');