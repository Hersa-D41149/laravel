<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TanyaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frist Blood
Route::get('/', function () {
    return view('pages.users.index');
})->name('index');
Route::get('/join', function () {
    return view('pages.host.join');
})->name('join');
Route::get('/pop', function () {
    return view('popup');
});
// User
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'join'])->name('home');

Route::get('/action', [StudentController::class, 'action'])->name('action');
Route::get('/viewrs', [StudentController::class, 'view1'])->name('viewrs');
Route::get('/try',    [StudentController::class, 'showtry'])->name('try');
Route::post('/try',   [StudentController::class, 'storetry'])->name('storetry');
// Route::get('/try', [StudentController::class, 'create'])->name('createtry');
// Route::post('/try', [StudentController::class, 'storetry'])->name('storetry');

// Host
Route::middleware(['host'])->group(function(){
// Route::get('/viewrs',                [TanyaController::class, 'view1'])->name('viewrs');
Route::get('/home',                     [TanyaController::class, 'join'])->name('home');
Route::get('/host/crud',                [TanyaController::class, 'crud'])->name('crud');
Route::get('/host/crud',                [TanyaController::class, 'show'])->name('crud');
Route::get('/host/home',                [TanyaController::class, 'show1'])->name('home');
Route::get('/host/create',              [TanyaController::class, 'create'])->name('create');
Route::post('/host/create',             [TanyaController::class, 'store'])->name('store');
Route::get('/host/edit{tanya}',         [TanyaController::class, 'edit'])->name('edit');
Route::patch('/host/update/{tanya}',    [TanyaController::class, 'update'])->name('update');
Route::delete('/host/delete/{tanya}',   [TanyaController::class, 'delete'])->name('delete');
});









