<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthenticationController;
<<<<<<< HEAD
use App\Http\Controllers\BossController;
use App\Models\Admin;
=======
use App\Models\Admin;
use App\Notifications\SendWelcomeEmail;
use Illuminate\Support\Facades\Mail;
>>>>>>> c23ef16c2e2c314c34f013e8f60fdd04b4df6908
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

/*Route::get('/', function () {
    return view('/Boss/signUp');
});*/
Route::get('getStartt', function () {
    return view('control-manager.auth.begin');
})->name('begin');
Route::get('abouting', function () {
    return view('control-manager.auth.about');
})->name('abouting');
Route::prefix('cpanel')->middleware('auth:admin')->group(function () {
    Route::get('/', function () {
        return view('temp.admin');
    })->name('cpanel');

    Route::get('logout', [AuthenticationController::class, 'logout'])->name('admin.logout');
});

Route::prefix('cpanel')->middleware('guest:admin')->group(function () {
    Route::get('login', [AuthenticationController::class, 'getLoginView'])->name('login');

<<<<<<< HEAD
    Route::post('login', [AuthenticationController::class, 'login'])->name('admin.login');
});

Route::prefix('Start')->middleware('auth:boss')->group(function () {
    Route::get('/', function () {
        return view('temp.admin');
       

    }
    )->name('Start');
    Route::get('logout', [AuthenticationController::class, 'logoutBoss'])->name('boss.logout');
});


Route::prefix('Start')->middleware('guest:boss')->group(function () {
    Route::get('login', [AuthenticationController::class, 'bossGetLoginView'])->name('login');
    Route::post('login', [AuthenticationController::class, 'bossLogin'])->name('boss.login');
    Route::get('loginUp', [AuthenticationController::class, 'bossGetLoginUpView'])->name('loginUp');
    Route::post('loginUp', [AuthenticationController::class, 'bossLoginU'])->name('boss.loginUp');

});
Route::prefix('Sconed')->middleware('auth:manager')->group(function () {
    Route::get('/', function () {
        return view('control-manager.auth.getStart');
       

    }

    )->name('Sconed');
    
    Route::get('logout', [AuthenticationController::class, 'logoutManager'])->name('manager.logout');
});


Route::prefix('Sconed')->middleware('guest:manager')->group(function () {
    Route::get('login', [AuthenticationController::class, 'managerGetLoginView'])->name('login');
    Route::post('login', [AuthenticationController::class, 'managerLogin'])->name('manager.login');
    Route::get('loginUp', [AuthenticationController::class, 'managerGetLoginUpView'])->name('loginUp');
    Route::post('loginUp', [AuthenticationController::class, 'managerLoginU'])->name('manager.loginUp');

});


Route::resource('/Boss/signUp', BossController::class);

Route::resource('/Admin/Login', AdminController::class);
/*Route::get('/Admin/login/',[AdminController::class,'index'])->name("login.index");
Route::get('/Admin/login/create', [AdminController::class, 'create'])->name('login.create');
Route::post('/Admin/login/create', [AdminController::class, 'store'])->name('login.store');
Route::get('/Admin/categories/{category}', [AdminController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/{id}/edit', [categoriesController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{id}', [categoriesController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{id}', [categoriesController::class, 'destroy'])->name('categories.destroy');*/
=======


    // Route::get('test', function () {
    //     dd('This route for testing');
    // });


    // Route::get('another-test', function () {
    //     dd('This is another route for testing');
    // });

    Route::post('login', [AuthenticationController::class, 'login'])->name('admin.login');
});

Route::get('send-email', function () {
    $admin = Admin::first();
    // az540546@gmail.com
    // Mail::to($admin->email)->send(new SendWelcomeEmail());
    // $
    $admin->notify(new SendWelcomeEmail());
});

>>>>>>> c23ef16c2e2c314c34f013e8f60fdd04b4df6908
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