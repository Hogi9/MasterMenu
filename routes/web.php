<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
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

Route::get('/',[AuthController::class,'index']);
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'registerLogic']);
Route::get('/register',[AuthController::class,'register']);

Route::get('/logout',[AuthController::class,'logout']);

Route::middleware(['auth', 'role:superadmin,guest'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);
    Route::get('/menu',[MenuController::class,'index']);

    // Untuk menu utama
    Route::get('/testing',[MenuController::class,'testing']);
    
    // Untuk menu sampingan
    Route::get('/testing/testing',[MenuController::class,'testing2']);
    Route::get('/testing/testing2',[MenuController::class,'testing3']);

});
// Route::middleware(['auth', 'role:superadmin'])->group(function () {
//     Route::get('/testing', [DashboardController::class,'testing']);
// });

