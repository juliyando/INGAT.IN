<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Halaman Registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (hanya bisa diakses setelah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Halaman Admin Dashboard (hanya bisa diakses setelah login)
Route::get('/admin/dashboard', function () {
    return view('admin.DashboardAdmin');
})->name('admin.dashboard');

// halaman seluruh kegiatan
Route::get('/admin/SemuaKegiatan', function () {
    return view('admin.SemuaKegiatanAdmin');
})->name('admin.SemuaKegiatan');

// halam detail kegiatan
Route::get('/admin/DetailKegiatan', function () {
    return view('admin.DetailKegiatanAdmin');
})->name('admin.DetailKegiatan');

// halaman hasil kegiatan
Route::get('/admin/ArsipKegiatan', function () {
    return view('admin.ArsipKegiatanAdmin');
})->name('admin.ArsipKegiatan');

Route::get('/admin/TambahKegiatan', function () {
    return view('admin.TambahKegiatan');
})->name('admin.TambahKegiatan');

Route::get('/admin/EditKegiatan', function () {
    return view('admin.EditKegiatan');
})->name('admin.EditKegiatan');

Route::get('/admin/DetailArsip', function () {
    return view('admin.DetailArsip');
})->name('admin.DetailArsip');

Route::get('/admin/PengaturanAdmin', function () {
    return view('admin.PengaturanAdmin');
})->name('admin.PengaturanAdmin');
