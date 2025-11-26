<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ingat.in - Pengingat Acara RT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    
    @extends('layouts.admin')
    @section('title', 'detail Kegiatan')
    @section('content')
    <div class="content-wrapper px-3 py-3">
        <h1 class="mb-2" style="font-size: 1.8rem; color: #88304E;">Arsip Kegiatan</h1>
        <p style="font-size: 1rem; color: #555;">Apakah ada arsip yang ingin ditambahkan dokumentasi selama kegiatan?</p>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card kegiatan-card" onclick="window.location.href='{{ route('admin.DetailArsip') }}'">
                    <div class="card-body d-flex flex-column justify-content-between h-100">
                        <div>
                            <h5 class="card-title">Gotong Royong Mingguan</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Tanggal: 5 November 2025</h6>
                            <p class="card-text">Membersihkan area taman RT 05 secara bersama-sama untuk menjaga kebersihan lingkungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
