<?php

use App\Models\Warga;
use App\Models\ScheduleRegistration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ScheduleRegistrationController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
});

Route::middleware('auth')->group(function () {
    Route::get('/kalender', [ScheduleController::class, 'index'])->name('warga.calendar');
    Route::get('/events', [ScheduleController::class, 'getEvents'])->name('events.get');

    Route::post('/registrasi_kegiatan/store', [ScheduleRegistrationController::class, 'store'])->name('schedules.register.store');
    Route::post('/registrasi_kegiatan/batal/{activityId}', [ScheduleRegistrationController::class, 'destroy'])->name('schedules.register.destroy');
    Route::get('/daftar-kegiatan', [ScheduleRegistrationController::class, 'index'])->name('daftar');
    Route::get('/kegiatan/{activity}', [ScheduleRegistrationController::class, 'show'])->name('activity.show');

    Route::get('/profil', [WargaController::class, 'profile'])->name('profile');
    Route::get('/pengaturan', [WargaController::class, 'settings'])->name('settings');
});

Route::middleware(['auth', 'role:pengurus'])->group(function () {
    Route::get('/dashboard', [PengurusController::class, 'dashboard'])->name('dashboard');
    // Route::get('/kalender', [ScheduleController::class, 'index'])->name('pengurus.calendar');
    Route::get('/tambah-kegiatan', [PengurusController::class, 'showCreateForm'])->name('schedules.create');

    Route::post('create-schedule', [ScheduleController::class, 'create'])->name('schedules.store');
    Route::get('/schedule/delete/{id}', [ScheduleController::class, 'deleteEvent']);
    Route::post('/schedule/{id}', [ScheduleController::class, 'update']);
    Route::post('/schedule/{id}/resize', [ScheduleController::class, 'resize']);
});
