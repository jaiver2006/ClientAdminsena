<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Areas;
use App\Http\Controllers\TrainingCenters;
use App\Http\Controllers\Computers;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ApprenticesController;
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
})->name('dashboard');

/*aAres*/
Route::get('areas', [Areas::class, 'index'])->name('areas.index');
Route::get('area/create', [Areas::class, 'create'])->name('area.create');
Route::post('area', [Areas::class, 'store'])->name('area.store');
Route::get('area/{area}', [Areas::class, 'show'])->name('area.show');
Route::get('area/{area}/editar', [Areas::class, 'edit'])->name('area.edit');
Route::put('area/{area}', [Areas::class, 'update'])->name('area.update');
Route::delete('area/{area}', [Areas::class, 'destroy'])->name('area.destroy');

/*Computers*/
Route::get('computers', [Computers::class, 'index'])->name('computers.index');
Route::get('computer/create', [Computers::class, 'create'])->name('computer.create');
Route::post('computer', [Computers::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [Computers::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/editar', [Computers::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}', [Computers::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [Computers::class, 'destroy'])->name('computer.destroy');

/*TrainingCenters*/
Route::get('training-centers', [TrainingCenters::class, 'index'])->name('training-centers.index');
Route::get('training-center/create', [TrainingCenters::class, 'create'])->name('training-center.create');
Route::post('training-center', [TrainingCenters::class, 'store'])->name('training-center.store');
Route::get('training-center/{trainingCenter}', [TrainingCenters::class, 'show'])->name('training-center.show');
Route::get('training-center/{trainingCenter}/editar', [TrainingCenters::class, 'edit'])->name('training-center.edit');
Route::put('training-center/{trainingCenter}', [TrainingCenters::class, 'update'])->name('training-center.update');
Route::delete('training-center/{trainingCenter}', [TrainingCenters::class, 'destroy'])->name('training-center.destroy');

/*Courses*/
Route::get('courses', [CoursesController::class, 'index'])->name('courses.index');
Route::get('course/create', [CoursesController::class, 'create'])->name('course.create');
Route::post('course', [CoursesController::class, 'store'])->name('course.store');
Route::get('course/{course}', [CoursesController::class, 'show'])->name('course.show');
Route::get('course/{course}/editar', [CoursesController::class, 'edit'])->name('course.edit');
Route::put('course/{course}', [CoursesController::class, 'update'])->name('course.update');
Route::delete('course/{course}', [CoursesController::class, 'destroy'])->name('course.destroy');

/*Teachers*/
Route::get('teachers', [TeachersController::class, 'index'])->name('teachers.index');
Route::get('teacher/create', [TeachersController::class, 'create'])->name('teacher.create');
Route::post('teacher', [TeachersController::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [TeachersController::class, 'show'])->name('teacher.show');
Route::get('teacher/{teacher}/editar', [TeachersController::class, 'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}', [TeachersController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{teacher}', [TeachersController::class, 'destroy'])->name('teacher.destroy');

/*Apprentices*/
Route::get('apprentices', [ApprenticesController::class, 'index'])->name('apprentices.index');
Route::get('aprendiz/create', [ApprenticesController::class, 'create'])->name('aprendiz.create');
Route::post('aprendiz', [ApprenticesController::class, 'store'])->name('aprendiz.store');
Route::get('aprendiz/{apprentice}', [ApprenticesController::class, 'show'])->name('aprendiz.show');
Route::get('aprendiz/{apprentice}/editar', [ApprenticesController::class, 'edit'])->name('aprendiz.edit');
Route::put('aprendiz/{apprentice}', [ApprenticesController::class, 'update'])->name('aprendiz.update');
Route::delete('aprendiz/{apprentice}', [ApprenticesController::class, 'destroy'])->name('aprendiz.destroy');
