<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\backend\BuilderController;
use App\Http\Controllers\backend\ClientController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ExpertController;
use App\Http\Controllers\backend\PropertyController;
use App\Http\Controllers\backend\SectorController;
use App\Http\Controllers\backend\SpecialistController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\BookingController as BackendBookingController;
use App\Models\Expert;
use Illuminate\Support\Facades\Route;



// Frontend
// Route::get('/', function () {
//     return view('frontend.home');
// });

// Route::get('/about', function () {
//     return view('frontend.about');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'frontend.about')->name('about');






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
    Route::resource('/expert',ExpertController::class);
    Route::resource('/agent',AgentController::class);
    Route::resource('/property',PropertyController::class);
    Route::resource('/builder',BuilderController::class);
    Route::resource('/booking',BackendBookingController::class);
    Route::get('/booking/status/{id}',[BackendBookingController::class, 'changeStatus'])->name('changeStatus');
    Route::resource('/sector',SectorController::class);
    Route::resource('/client',ClientController::class);
    Route::resource('/contact',ContactController::class);

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



Route::middleware('guest:client')->prefix('client')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Client\LoginController::class, 'login'])->name('client.login');

    Route::post('login', [App\Http\Controllers\Auth\Client\LoginController::class, 'check_user']);

    Route::get('register', [App\Http\Controllers\Auth\Client\RegisterController::class, 'create'])->name('client.register');
    Route::post('register', [App\Http\Controllers\Auth\Client\RegisterController::class, 'store']);

});

Route::middleware('auth:client')->prefix('client')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Client\LoginController::class, 'destroy'])->name('client.logout');

    Route::view('/dashboard','frontend.dashboard');

});


Route::middleware('guest:customer')->prefix('customer')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Customer\LoginController::class, 'login'])->name('customer.login');

    Route::post('login', [App\Http\Controllers\Auth\Customer\LoginController::class, 'check_user']);

    Route::get('register', [App\Http\Controllers\Auth\Customer\RegisterController::class, 'create'])->name('customer.register');
    Route::post('register', [App\Http\Controllers\Auth\Customer\RegisterController::class, 'store']);

});

Route::middleware('auth:customer')->prefix('customer')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Customer\LoginController::class, 'destroy'])->name('customer.logout');
    
    Route::get('/booking', [BookingController::class, 'create'])->name('front_app.create');
Route::post('/booking', [BookingController::class, 'store'])->name('front_app.store');

    Route::view('/home','frontend.home');

});

require __DIR__.'/auth.php';



