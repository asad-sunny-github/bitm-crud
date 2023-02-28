<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/add-student', [StudentController::class, 'index'])->name('student.add');
Route::post('/new-student', [StudentController::class, 'create'])->name('student.new');
Route::get('/manage-student', [StudentController::class, 'manage'])->name('student.manage');
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/delete-student/{id}', [StudentController::class, 'delete'])->name('student.delete');
