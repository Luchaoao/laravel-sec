<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProfileController;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/ClassList', [ClassController::class, 'index']);

    // Route::get('/ClassList', function () {
    //     return Inertia::render('ClassList');
    // });
    
    Route::get('/AddClass', function () {
        return Inertia::render('AddClass');
    });
    
    Route::post('/add-class',[ClassController::class, 'add']);

    Route::get('/EditClass', function () {
        return Inertia::render('EditClass');
    });
    Route::get('/TeacherList', function () {
        return Inertia::render('TeacherList');
    });
    Route::get('/AddTeacher', function () {
        return Inertia::render('AddTeacher');
    });
    Route::get('/EditTeacher', function () {
        return Inertia::render('EditTeacher');
    });
    Route::get('/SemesterList', function () {
        return Inertia::render('SemesterList');
    });
    Route::get('/AddClassToSemester', function () {
        return Inertia::render('AddClassToSemester');
    });
    Route::get('/EditAddClassToSemester', function () {
        return Inertia::render('EditAddClassToSemester');
    });
});


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
