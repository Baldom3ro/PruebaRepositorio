<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardController;
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
    return view('index');
}) -> name('index');*/

Route::resource('/students', App\Http\Controllers\StudentController::class);
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/{student}/delete',[StudentController::class, 'delete'])->name('students.delete');

Route::resource('/tutors', App\Http\Controllers\TutorController::class);
Route::put('/tutors/{id}', [TutorController::class, 'update'])->name('tutors.update');
Route::get('/tutors/{tutor}/delete',[TutorController::class, 'delete'])->name('tutors.delete');

Route::resource('/teachers', App\Http\Controllers\TeacherController::class);
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teachers.update');
Route::get('/teachers/{teacher}/delete',[TeacherController::class, 'delete'])->name('teachers.delete');

Route::resource('/subjects', App\Http\Controllers\SubjectController::class);
Route::put('/subjects/{id}', [SubjectController::class, 'update'])->name('subjects.update');
Route::get('/subjects/{subject}/delete',[SubjectController::class, 'delete'])->name('subjects.delete');

Route::resource('/inscriptions', App\Http\Controllers\InscriptionController::class);
Route::put('/inscriptions/{id}', [InscriptionController::class, 'update'])->name('inscriptions.update');
Route::get('/inscriptions/{inscription}/delete',[InscriptionController::class, 'delete'])->name('inscriptions.delete');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');