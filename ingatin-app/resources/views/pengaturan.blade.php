{{-- Ini mengasumsikan kamu punya layout utama 'layouts.app' --}}
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
{{-- 
  Ini adalah kontainer utama halamannya.
  display: flex akan membuat sidebar dan konten jadi 2 kolom.
--}}
<div class="pengaturan-container">

    <aside class="pengaturan-sidebar">
        <div class="sidebar-header">
            <h3>Pengaturan akun pengguna</h3>
            <h2>Pengaturan</h2>
        </div>
        <nav class="sidebar-nav">
            <ul>
                {{-- 
                  Nanti kamu bisa pakai URL::route() atau helper Laravel 
                  untuk link href-nya 
                --}}
                <li>
                    <a href="#">
                        <span>Akun</span>
                    </a>
                </li>
                <li class="active"> {{-- 'active' menandai halaman yg sedang dibuka --}}
                    <a href="#">
                        <span>Pengaturan Profil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Ganti Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="pengaturan-content">
        <h2>Pengaturan Profil</h2>

        {{-- Arahkan 'action' ke route Laravel yang sesuai --}}
        <form action="#" method="POST">
            {{-- Jangan lupa @csrf di form Laravel --}}
            {{-- @csrf --}}
            
            {{-- 
              Kita pakai .form-row dan flexbox 
              agar "Nama awal" dan "Nama Akhir" bisa sejajar.
            --}}
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

{{-- @endsection --}}