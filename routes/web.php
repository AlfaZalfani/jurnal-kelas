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

    // Students
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/', \App\Http\Livewire\Student\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Student\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Student\Detail::class)->name('detail');
    });

    // Class
    Route::prefix('classes')->name('classes.')->group(function () {
        Route::get('/', \App\Http\Livewire\Classes\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Classes\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Classes\Detail::class)->name('detail');
    });

    // Journal
    Route::prefix('journal')->name('journal.')->group(function () {
        Route::get('/', \App\Http\Livewire\Journal\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Journal\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Journal\Detail::class)->name('detail');
    });


    // Teacher
    Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/', \App\Http\Livewire\Teacher\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Teacher\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Teacher\Detail::class)->name('detail');
    });

    // Subject
    Route::prefix('subject')->name('subject.')->group(function () {
        Route::get('/', \App\Http\Livewire\Subject\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Subject\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Subject\Detail::class)->name('detail');
    });

// User Management
    Route::prefix('user-management')->name('user-management.')->group(function () {
        // Role
        Route::prefix('role')->name('role.')->group(function () {
            Route::get('/', \App\Http\Livewire\UserManagement\Role\Index::class)->name('index');
            Route::get('/create', \App\Http\Livewire\UserManagement\Role\Create::class)->name('create');
            Route::get('/detail', \App\Http\Livewire\UserManagement\Role\Detail::class)->name('detail');
        });

        // Permission
        Route::prefix('permission')->name('permission.')->group(function () {
            Route::get('/', \App\Http\Livewire\UserManagement\Permission\Index::class)->name('index');
            Route::get('/create', \App\Http\Livewire\UserManagement\Permission\Create::class)->name('create');
            Route::get('/detail', \App\Http\Livewire\UserManagement\Permission\Detail::class)->name('detail');
        });

        // User
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', \App\Http\Livewire\UserManagement\User\Index::class)->name('index');
            Route::get('/create', \App\Http\Livewire\UserManagement\User\Create::class)->name('create');
            Route::get('/detail', \App\Http\Livewire\UserManagement\User\Detail::class)->name('detail');
        });
    });
});
