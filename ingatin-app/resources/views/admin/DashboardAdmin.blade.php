<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ingat.in - Pengingat Acara RT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
  <style>
  .btn-custom {
    background-color: #88304E;
    color: #fff;
    border: none;
    padding: 0.5rem 1.2rem;
    border-radius: 8px;
    transition: background-color 0.3s ease;
  }

  .btn-custom:hover {
    background-color: #a43a63; /* warna lebih terang saat hover */
  }

  .btn-custom i {
    font-size: 1.1rem;
  }

 
</style>
 @extends('layouts.admin')
 @section('title', 'Semua Kegiatan')
 @section('content')
   <div class="content-wrapper px-1 py-3">
    <h1 class="mb-2" style="font-size: 1.8rem; color: #88304E;">
        Selamat datang, {{ Auth::user()->name ?? 'Admin' }} 👋
    </h1>
    <p style="font-size: 1rem; color: #555;">
        Ada kegiatan baru apa yang ingin ditambahkan?
    </p>
    <button type="button" class="btn btn-custom d-flex align-items-center gap-2" onclick="window.location.href='{{ route('admin.TambahKegiatan') }}'">
        <i class="bi bi-plus-circle"></i>Tambah Kegiatan
    </button>
  </div>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
