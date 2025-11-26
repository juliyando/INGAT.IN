{{-- resources/views/pengaturan/password.blade.php --}}

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

    <main class="pengaturan-content">

        <h2>Ganti Password</h2>

        <form action="#" method="POST"> {{-- Nanti 'action' diisi route untuk proses update password --}}
            @csrf 

            <div class="form-group">
                <label for="password_baru">Password Baru</label>
                {{-- Gunakan type="password" agar isinya jadi bintang-bintang --}}
                <input type="password" id="password_baru" name="password_baru" class="form-control">
            </div>

            <div class="form-group">
                <label for="konfirmasi_password">Konfirmasi Password</label>
                <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="form-control">
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>

    </main>
</div>
@endsection