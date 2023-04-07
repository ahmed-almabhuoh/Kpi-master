<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthenticationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Logout

Route::prefix('cpanel')->middleware('auth:admin')->group(function () {
    Route::get('/', function () {
        return view('temp.admin');
    })->name('cpanel');

    Route::get('logout', [AuthenticationController::class, 'logout'])->name('admin.logout');
});

Route::prefix('cpanel')->middleware('guest:admin')->group(function () {
    Route::get('login', [AuthenticationController::class, 'getLoginView'])->name('login');

    Route::post('login', [AuthenticationController::class, 'login'])->name('admin.login');
});

//Route::get('manar',AdminController::class);
//Route::get('/view', 'admin');
/*function () {
    // 1. Json OBJ
    // 2. Array

    // 3.
    $payload = [
        'a' => 20,
        'b' => 55,
    ];

    $equations = "a * b";
    $ready_equations = $equations;
    foreach ($payload as $key => $value) {
        $ready_equations = str_replace($key, $value, $ready_equations);
    }
    echo eval('return ' . $ready_equations . ';');
});*/
