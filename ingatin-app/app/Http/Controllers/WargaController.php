<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        
        // Pastikan Anda membuat file view ini: resources/views/user/profile.blade.php
        return view('warga.profile', compact('user'));
    }

    public function settings()
    {
        // Memanggil view di resources/views/warga/settings.blade.php
        return view('warga.pengaturan'); 
    }
}
