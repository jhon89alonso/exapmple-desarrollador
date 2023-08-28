<?php

use App\Http\Controllers\Dashboard\RoutesDashboardController;
use App\Http\Controllers\ExternalContentsController;
use App\Http\Controllers\ProfileController;
use App\Models\Contens\ExternalContents;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        // 'canRegister' => Route::has('register'),
        // 'laravelVersion' => Application::VERSION,
        // 'phpVersion' => PHP_VERSION,
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
Route::group(['middleware' => 'auth', 'prefix' => 'users'], function () {
    Route::get('cms', [RoutesDashboardController::class,'indexContentCMS'])->name('cms');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    // Route::resource('users', UserController::class);
    Route::resource('external_content', ExternalContentsController::class);
});
