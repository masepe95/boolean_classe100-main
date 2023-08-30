<?php

use App\Http\Controllers\StudentController;
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
    return view('home');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');



Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');


// edit form route
Route::get('/students/{student}/edit', [studentController::class, 'edit'])->name('students.edit');
// update route
Route::put('/students/{student}', [studentController::class, 'update'])->name('students.update');
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
// Mostra il dettaglio di uno studente:
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

