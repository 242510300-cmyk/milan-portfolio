<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect('/login');
});

// Tampilkan login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// Dashboard sederhana setelah login (Tambahkan ->name('dashboard') jika diperlukan)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// --- TAMBAHKAN RUTE LOGOUT DI BAWAH INI ---
Route::post('/logout', function (\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Auth::logout();
    
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return redirect('/login');
})->name('logout'); // Nama ini yang dicari oleh tombol di dashboard kamu