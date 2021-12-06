<?php

use App\Http\Controllers\CurseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/َ', function () {
    return view('welcome');
});

Route::get('/Admin',function () {return view('Admin.Admin');});
Route::prefix('Users')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('users.index');
    Route::get('/create',[UserController::class,'create'])->name('users.create');
    Route::get('{user}',[UserController::class,'show'])->name('users.show');
    Route::post('/',[UserController::class,'store'])->name('users.store');
    Route::get('/{user}/edit', [UserController::class , 'edit'])->name('user.edit');
    Route::put('/{user}', [UserController::class , 'update'])->name('user.update');
    Route::delete('/{user}', [UserController::class , 'delete'])->name('user.delete');
});
Route::prefix('Curse')->group(function(){
    Route::get('/',[CurseController::class,'index'])->name('curse.index');
    Route::get('/create',[CurseController::class,'create'])->name('curse.create');
    Route::get('{curse}',[CurseController::class,'show'])->name('curse.show');
    Route::post('/',[CurseController::class,'store'])->name('curse.store');
    Route::get('/{curse}/edit',[CurseController::class,'edit'])->name('curse.edit');
    Route::put('/{curse}',[CurseController::class,'update'])->name('curse.update');
    Route::delete('/{curse}',[CurseController::class,'delete'])->name('curse.delete');
});
