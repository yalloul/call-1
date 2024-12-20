<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/SA', function () {
    return view('dashbord.SA');
});
Route::get('/Manager', function () {
    return view('dashbord.Manager');
});
Route::get('/Agent', function () {
    return view('dashbord.Agent');
});
Route::get('/Admin', function () {
    return view('dashbord.Admin');
});





require __DIR__.'/auth.php';
