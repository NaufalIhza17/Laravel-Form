<?php

// use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

// Route::get('register', [RegistrationController::class, 'index']);
// Route::post('addimage', [RegistrationController::class, 'store'])->name('addimage');


// Route::get('/', 'StudentsController@index')->name('index');
Route::get('/', [StudentsController::class, 'index'])->name('index');
Route::get('/create', [StudentsController::class, 'create'])->name('create');
Route::post('store/', [StudentsController::class, 'store'])->name('store');
Route::get('show/{students}', [StudentsController::class, 'show'])->name('show');
Route::delete('/{students}', [StudentsController::class, 'destroy'])->name('destroy');