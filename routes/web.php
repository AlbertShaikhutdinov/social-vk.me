<?php

use App\Http\Controllers\SearchVKController;
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
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'arisVersion' => '1.0.1',
    ]);
})->name('index');

Route::get('/private-policy', function () {
    return Inertia::render('private-policy');
})->name('dashboard');

Route::get('/free-services', function () {
    return Inertia::render('free-services');
})->name('dashboard');

/*Admin Panel*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/searchVK', function () {
        return Inertia::render('SearchVK');
    })->name('searchVK');

    Route::get('/searchVK/search', [SearchVKController::class, 'search'])->name('searchVK.search');

    Route::get('/postFeed', function () {
        return Inertia::render('PostFeed');
    })->name('postFeed');
});
