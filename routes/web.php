<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelayananController;
 
Route::get('/', function () {
    return view('beranda');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(PelayananController::class)->prefix('pelayanans')->group(function () {
        Route::get('', 'index')->name('pelayanans');
        Route::get('create', 'create')->name('pelayanans.create');
        Route::post('store', 'store')->name('pelayanans.store');
        Route::get('show/{id}', 'show')->name('pelayanans.show');
        Route::get('edit/{id}', 'edit')->name('pelayanans.edit');
        Route::put('edit/{id}', 'update')->name('pelayanans.update');
        Route::delete('destroy/{id}', 'destroy')->name('pelayanans.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});