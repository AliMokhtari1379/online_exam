<?php

use App\Http\Controllers\CurseController;
use App\Http\Controllers\CurseTeacherController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Teacher.Teacher');
})->middleware(['auth'])->name('dashboard');
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
    Route::get('/Add',[CurseController::class,'Add'])->name('curse.Add');
    Route::get('{curse}',[CurseController::class,'show'])->name('curse.show');
    Route::post('/',[CurseController::class,'store'])->name('curse.store');
    Route::post('/zakhireh',[CurseController::class,'zakhire'])->name('curse.zakhire');
    Route::get('/{curse}/edit',[CurseController::class,'edit'])->name('curse.edit');
    Route::put('/{curse}',[CurseController::class,'update'])->name('curse.update');
    Route::delete('/{curse}',[CurseController::class,'delete'])->name('curse.delete');
});
Route::prefix('CurseTeacher')->group(function(){
    Route::get('/',[CurseTeacherController::class,'index'])->name('curseteacher.index');
    Route::get('/create',[CurseTeacherController::class,'create'])->name('curseteacher.create');
    Route::get('/showexams/{exam}',[CurseTeacherController::class,'showexams'])->name('exam.show');
    Route::get('/showquestion/{exam}',[CurseTeacherController::class,'showquestion'])->name('exam.showquestion');
    Route::post('/',[CurseTeacherController::class,'store'])->name('curseteacher.store');
    Route::get('/{exam}/edit',[CurseTeacherController::class,'edit'])->name('exam.edit');
    Route::put('/{exam}',[CurseTeacherController::class,'update'])->name('exam.update');
    Route::delete('/{exam}',[CurseTeacherController::class,'delete'])->name('exam.delete');
});
require __DIR__.'/auth.php';
