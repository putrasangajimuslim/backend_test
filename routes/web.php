<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::get('homeuser', [UserController::class, 'index'])->name('homeuser');

// Route::group(['middleware' => 'jwt.auth'], function () {
//     Route::get('user', function (Request $request) {
//         return auth()->user();
//     });
// });
