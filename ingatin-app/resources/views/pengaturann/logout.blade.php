@extends('layouts.app')

@section('content')
<div class="pengaturan-container">

    <aside class="pengaturan-sidebar">
        <div class="sidebar-header">
            <h3>Pengaturan akun pengguna</h3>
            <h2>Pengaturan</h2>
        </div>
        <nav class="sidebar-nav">
            <ul>
                {{-- ... (Link Akun kalau ada) ... --}}

                <li> 
                    {{-- Hapus 'active' dan arahkan ke route profil --}}
                    <a href="{{ route('pengaturan.index') }}">
                        <span>Pengaturan Profil</span>
                    </a>
                </li>

                <li class="active"> {{-- Pindahkan 'active' ke sini --}}
                    {{-- Arahkan ke route password --}}
                    <a href="{{ route('pengaturan.password') }}">
                        <span>Ganti Password</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout.confirm')}}">
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

<div class="logout-wrapper">
    <div class="logout-card">
        <img src="{{ asset('images/logout.gif') }}" 
            alt="Logout Animation" 
            class="logout-icon">
        <h2>Konfirmasi Keluar</h2>
        <p>Apakah Anda yakin ingin logout dari aplikasi ini?</p>

        <div class="logout-actions">
            {{-- FORM LOGOUT (Tombol Merah) --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout-confirm">
                    Ya, Keluar
                </button>
            </form>

            {{-- TOMBOL BATAL (Tombol Abu-abu) --}}
            <a href="{{ route('pengaturan.index') }}" class="btn-logout-cancel">
                Batal
            </a>
        </div>
    </div>
</div>
@endsection