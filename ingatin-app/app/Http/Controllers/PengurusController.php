<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengurusController extends Controller
{
    public function __construct()
    {
        // Gunakan middleware yang sudah ada untuk memproteksi semua fungsi di controller ini
        $this->middleware(['role:pengurus']);
    }

    public function dashboard()
    {
        // Di sini Anda bisa mengambil statistik penting untuk Dashboard
        // $totalUpcoming = Schedule::where('status', 'upcoming')->count();
        // $totalFinished = Schedule::where('status', 'finished')->count();

        return view('pengurus.dashboard');
        // compact('totalUpcoming', 'totalFinished')
    }

    public function showCreateForm()
    {
        // Memanggil view resources/views/pengurus/tambah.blade.php
        return view('pengurus.tambah');
    }
}
