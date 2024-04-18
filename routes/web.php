<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::controller(HomeController::class)->group(function(){
    Route::post('/updated','updateCustomer')->name('updated');
});

Route::controller(CustomerController::class)->group(function(){
    Route::get('/register-form', 'showRegistrationForm')->name('register-form');
    Route::post('/registered','registerVroom')->name('registered');
    Route::get('/registration/reject/{id}', 'cancelRegistration')->name('cancel-registration');


});
