<?php

use App\Http\Controllers\CouponController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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


Route::get('/',[HomeController::class,"index"])->name("home");
Route::get("/live",[HomeController::class,"live"])->name("live");
Route::get("article/{id}",[PostController::class,"show"])->name("posts.show");
Route::get("couponsHome/",[CouponController::class,"index"])->name("coupons.index");
Route::get("frontPosts",[PostController::class,"front"])->name("posts.front");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("articles",[PostController::class,"index"])->name("posts.index");
    Route::get("article",[PostController::class,"create"])->name("posts.create");
    Route::post("articles",[PostController::class,"store"])->name("posts.store");
    Route::get("/dashboard",[HomeController::class,"dashboard"])->name("dashboard");
    Route::get("events", [EventsController::class, "index"])->name("event.index");
    Route::get("event", [EventsController::class,"create"])->name("event.create");
    Route::post("event", [EventsController::class, "store"])->name("event.store");

});

require __DIR__.'/auth.php';
