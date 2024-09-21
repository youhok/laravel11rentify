<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Role\RolesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

// Frontend routes
Route::get('/', [FrontendController::class, 'index'])->name('myhome');
Route::get('/about', [FrontendController::class, 'about'])->name('aboutUs');
Route::get('/howitwork', [FrontendController::class, 'howitwork'])->name('howitWork');
Route::get('/features', [FrontendController::class, 'features'])->name('features');

// Auth routes
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register', [FrontendController::class, 'register'])->name('register');

// Backend routes
Route::get('/role', [BackendController::class, 'Role'])->name('myRole');
Route::get('/table', [BackendController::class, 'Table'])->name('myTable');

// Role management routes
Route::post('/role', [RolesController::class, 'create'])->name('roles.create');
Route::put('/role/{id}', [RolesController::class, 'update'])->name('roles.update');
Route::delete('/role/{id}', [RolesController::class, 'delete'])->name('roles.delete');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
