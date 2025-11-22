<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN - DETAIL KEGIATAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
</head>
<body>
     @extends('layouts.admin')
     @section('title', 'Semua Kegiatan')
     @section('content')
         <div class="detail-wrapper">
    <div class="detail-card">

        <h2 class="mb-4" style="color:#88304E;">Judul Kegiatan Contoh</h2>

        <p><i class="bi bi-calendar3"></i> Tanggal: 12 Desember 2025</p>
        <p><i class="bi bi-clock"></i> Waktu: 15.00 - 17.00 WIB</p>
        <p><i class="bi bi-geo-alt"></i> Lokasi: Balai Warga RT 05</p>

        <hr>

        <p>
            Ini adalah contoh deskripsi kegiatan. Anda dapat menuliskan penjelasan lengkap mengenai acara,
            keperluan, peserta, dan detail lainnya yang perlu diketahui warga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi pariatur dolores enim vitae illo nesciunt eaque, dignissimos saepe quos magni minus, facilis error corporis doloribus, cum adipisci autem perferendis perspiciatis!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quia assumenda maxime! Architecto molestiae necessitatibus perspiciatis voluptatum voluptates doloribus. Perspiciatis veniam culpa praesentium. Voluptates, quibusdam asperiores illo quae nostrum natus!
        </p>

        <div class="mt-4 d-flex gap-2">
            <a href="#" class="btn btn-edit"><i class="bi bi-pencil-square"></i> Edit Kegiatan</a>
            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a>
        </div>

    </div>
</div>
     @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>