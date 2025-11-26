{{-- resources/views/pengaturan/index.blade.php --}}

{{-- 1. Mewarisi 'bingkai' dari layouts/app.blade.php --}}
@extends('layouts.app')

{{-- 2. Memasukkan konten ini ke 'lubang' @yield('content') --}}
@section('content')

{{-- 
  TIDAK ADA <head> atau <body> di sini. 
  Hanya kontennya saja.
--}}
<div class="pengaturan-container">
<aside class="pengaturan-sidebar">
    <div class="sidebar-header">
            <h3>Pengaturan akun pengguna</h3>
            <h2>Pengaturan</h2>
        </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="active"> 
                {{-- Pastikan route ini ada di web.php --}}
                <a href="{{ route('pengaturan.index') }}">
                    <span>Pengaturan Profil</span>
                </a>
            </li>

            <li> 
                {{-- 
                   PERHATIAN: Jika rute ini belum ada di web.php, 
                   ganti dulu menjadi href="#" agar tidak error sementara waktu
                --}}
                <a href="{{ route('pengaturan.password') }}"> {{-- Ganti route('pengaturan.password') jadi # dulu --}}
                    <span>Ganti Password</span>
                </a>
            </li>

            <li>
                {{-- PERBAIKAN DI SINI: Gunakan nama 'logout.confirm' --}}
                <a href="{{ route('logout.confirm') }}">
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

{{-- ... (sisa kode main content tidak perlu diubah) ... --}}

    <main class="pengaturan-content">
        <h2>Pengaturan Profil</h2>

        {{-- Arahkan 'action' ke route Laravel yang sesuai --}}
        <form action="#" method="POST">
            @csrf {{-- Token keamanan wajib Laravel --}}
            
            <div class="form-row">
                <div class="form-group">
                    <label for="nama_awal">Nama awal*</label>
                    <input type="text" id="nama_awal" name="nama_awal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_akhir">Nama Akhir*</label>
                    <input type="text" id="nama_akhir" name="nama_akhir" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" id="no_hp" name="no_hp" class="form-control">
            </div>

            <div class="form-group">
                <label>Gender</label>
                <div class="gender-options">
                    <label for="perempuan">
                        <input type="radio" id="perempuan" name="gender" value="perempuan">
                        Perempuan
                    </label>
                    <label for="laki-laki">
                        <input type="radio" id="laki-laki" name="gender" value="laki-laki">
                        Laki-Laki
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" rows="4" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn-submit">Simpan</button>

        </form>
    </main>
</div>

@endsection 