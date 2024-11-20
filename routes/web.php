<?php

use App\Http\Controllers\backend\SpecialistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin route
Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);

});

Route::middleware('auth:admin')->prefix('admin')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::view('/dashboard','backend.admin_dashboard');
    Route::resource('/specialist',SpecialistController::class);

});


// agent route
Route::middleware('guest:agent')->prefix('agent')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Agent\LoginController::class, 'login'])->name('agent.login');
    Route::post('login', [App\Http\Controllers\Auth\Agent\LoginController::class, 'check_user']);

});

Route::middleware('auth:agent')->prefix('agent')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Agent\LoginController::class, 'logout'])->name('agent.logout');

    Route::view('/dashboard','backend.agent_dashboard');

});

require __DIR__.'/auth.php';



