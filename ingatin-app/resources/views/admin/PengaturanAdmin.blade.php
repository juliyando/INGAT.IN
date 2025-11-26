@extends('layouts.admin')
@section('title', 'Pengaturan Admin')

@section('content')

<style>
/* ==========================================================================
   VARIABEL WARNA
   ========================================================================== */
:root {
    --primary-hover: #D7A9B8;
    --primary-color: #88304E;
    --card-bg: #ffffff;
    --text-dark: #1f2937;
    --text-gray: #6b7280;
    --border-color: #e5e7eb;
}

/* ==========================================================================
   LAYOUT UTAMA
   ========================================================================== */
.pengaturan-container {
    display: flex;
    max-width: 1100px;
    margin: 40px auto;
    align-items: flex-start;
    gap: 30px; 
    background-color: transparent;
}

/* ==========================================================================
   SIDEBAR (KIRI)
   ========================================================================== */
.pengaturan-sidebar {
    width: 260px;
    background-color: var(--card-bg);
    border-radius: 16px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    border: 1px solid var(--border-color);
    padding: 30px 20px;
}

.sidebar-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #f3f4f6;
}

.sidebar-header h3 {
    font-size: 12px;
    color: var(--text-gray);
    margin-bottom: 5px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.sidebar-header h2 {
    font-size: 20px;
    color: var(--text-dark);
    font-weight: 800;
    margin: 0;
}

.sidebar-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-nav li {
    margin-bottom: 8px;
}

.sidebar-nav a {
    display: flex;
    align-items: center;
    padding: 12px 16px;
    text-decoration: none;
    color: var(--text-gray);
    font-weight: 500;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.sidebar-nav a:hover {
    background-color: #fee2e2;
    color: var(--primary-color);
}

.sidebar-nav li.active a {
    background-color: var(--primary-color);
    color: white;
    box-shadow: 0 4px 6px rgba(153, 27, 27, 0.2);
}

/* ==========================================================================
   KONTEN FORM (KANAN)
   ========================================================================== */
.pengaturan-content {
    flex: 1;
    background-color: var(--card-bg);
    border-radius: 16px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    border: 1px solid var(--border-color);
    padding: 40px 50px;
}

.pengaturan-content h2 {
    margin-top: 0;
    margin-bottom: 30px;
    color: var(--text-dark);
    font-size: 1.5rem;
    font-weight: 700;
    border-bottom: 1px solid var(--border-color);
    padding-bottom: 15px;
}

.form-group {
    margin-bottom: 24px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #374151;
    font-weight: 600;
    font-size: 0.9rem;
}

/* Input */
.form-control {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 1rem;
    color: var(--text-dark);
    transition: 0.2s ease;
}

.form-control:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(153, 27, 27, 0.1);
}

/* 2 Input sejajar */
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

/* Radio Gender */
.gender-options {
    display: flex;
    gap: 24px;
    margin-top: 5px;
}

.gender-options label {
    display: flex;
    align-items: center;
    cursor: pointer;
}

.gender-options input[type="radio"] {
    margin-right: 8px;
    transform: scale(1.2);
    accent-color: var(--primary-color);
}

/* Tombol */
.btn-submit {
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
}

.btn-submit:hover {
    background-color: var(--primary-hover);
}
</style>

<div class="pengaturan-container">

    <!-- ====================== SIDEBAR KIRI ====================== -->
    <aside class="pengaturan-sidebar">
        <div class="sidebar-header">
            <h3>Pengaturan akun pengguna</h3>
            <h2>Pengaturan</h2>
        </div>

        <nav class="sidebar-nav">
            <ul>
                <li class="active"><a href="#">Pengaturan Profil</a></li>
                <li><a href="#">Ganti Password</a></li>
                <li><a href="#">Log Out</a></li>
            </ul>
        </nav>
    </aside>

    <!-- ====================== KONTEN KANAN ====================== -->
    <main class="pengaturan-content">
        <h2>Pengaturan Profil</h2>

        <form action="#" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="nama_awal">Nama Awal*</label>
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
                    <label>
                        <input type="radio" name="gender" value="perempuan"> Perempuan
                    </label>
                    <label>
                        <input type="radio" name="gender" value="laki-laki"> Laki-Laki
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
