<?php

use Illuminate\Http\Request;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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


// Untuk redirect ke Google (LOGIN)
Route::get('login/google/redirect', [usercontroller::class, 'redirect']);
    // ->middleware(['guest'])
    // ->name('redirect');

// Untuk callback dari Google (LOGIN)
Route::get('login/google/callback', [usercontroller::class, 'callback']);
    // ->middleware(['guest'])
    // ->name('callback');

// Untuk logout
Route::post('logout', [usercontroller::class, 'logout']);
    // ->middleware(['auth'])
    // ->name('logout');

    // Untuk redirect ke Google (SIGN UP)
// Route::get('signup/google/redirect', [usercontroller::class, 'redirect']);
// ->middleware(['guest'])
// ->name('redirect');

// Untuk callback dari Google (SIGN UP)
// Route::get('signup/google/callback', [usercontroller::class, 'callback']);
// ->middleware(['guest'])
// ->name('callback');

Route::post('login_manual', [usercontroller::class, 'login_manual']); 
// Route::post('register_manual', [usercontroller::class, 'register_manual']);

