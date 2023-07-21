<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'show_post'])->name('home');
Route::middleware(['auth'])->group(function(){
Route::get('/dashboard',[DashboardController::class,'show_post'])->name('dashboard');

    // Route::get('/post',[PostController::class,'index'])->middleware(['can:isAdmin,App\Models\Post'])->name('post_index');
Route::get('/post',[PostController::class,'index'])->name('post_index');

Route::post('/post',[PostController::class,'create'])->name('post_create');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post_edit');
Route::put('/post/edit/{id}',[PostController::class,'update'])->name('post_update');
Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post_destroy');
    

});

// Route::get('/post',[PostController::class,'index'])->middleware(['auth'])->name('post_index');
// Route::post('/post',[PostController::class,'create'])->middleware(['auth'])->name('post_create');
// Route::get('/dashboard',[DashboardController::class,'show_post'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('logout', [AuthenticatedSessionController::class,'logout'])->name('logout');


require __DIR__.'/auth.php';