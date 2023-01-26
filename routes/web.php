<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home.index');
});
Route::view('about', 'home.about');
Route::view('course', 'home.course');
Route::view('contact', 'home.contact');
Route::view('course', 'home.course');
Route::view('feature', 'home.feature');
Route::view('detail', 'home.detail');
Route::view('team', 'home.team');
Route::view('testimonial', 'home.testimonial');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::name("admin.")->prefix("admin")->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');


});

Route::name("user.")->prefix("user")->middleware(['auth', 'is_user'])->group(function () {

    Route::get('/', [HomeController::class, 'first'])->name('dashboard');



    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


});
