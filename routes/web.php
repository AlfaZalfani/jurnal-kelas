<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //student disini
});

Route::prefix('students')->name('students.')->group(function () {
    Route::name('index')->get('index', \App\Http\Livewire\Students\Index::class);
});
Route::prefix('subjects')->name('subjects.')->group(function () {
    Route::name('index')->get('index', \App\Http\Livewire\Subjects\Index::class);
});
Route::prefix('classes')->name('classes.')->group(function () {
    Route::name('index')->get('index', \App\Http\Livewire\Classes\Index::class);
});
Route::prefix('journals')->name('journals.')->group(function () {
    Route::name('index')->get('index', \App\Http\Livewire\Journals\Index::class);
});
Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::name('index')->get('index', \App\Http\Livewire\Teachers\Index::class);
});

