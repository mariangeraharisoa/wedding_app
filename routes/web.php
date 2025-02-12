<?php

use App\Http\Controllers\frontoffice\HomeFrontController;
use App\Http\Controllers\frontoffice\PackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\PlanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('/login',[LoginController::class, 'index']);
Route::post('login',[LoginController::class, 'login'])->name('login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout'); 

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
Route::post('/users/add', [UserController::class, 'doAdd'])->name('users.doAdd');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/edit/{id}', [UserController::class, 'doEdit'])->name('users.doEdit');
Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');

Route::get('/planning', [PlanController::class, 'reservation']);
Route::get('/dash',[DashController::class,'dash'])->name('gestion'); 

Route::get('/fo/home', [HomeFrontController::class, 'index'])->name('fo.home');

Route::get('/fo/coordination', [PackageController::class, 'coordinationDay'])->name('fo.coordination');
Route::get('/fo/partial-organization', [PackageController::class, 'partialOrganization'])->name('fo.partial_organization');
Route::get('/fo/complete-organization', [PackageController::class, 'completeOrganization'])->name('fo.complete_organization');