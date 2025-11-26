<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN - DETAIL ARSIP</title>
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
            <p>Ini adalah contoh deskripsi kegiatan...</p>
            <h2 class="mt-4 mb-3" style="color:#88304E;">Hasil Dokumentasi</h2>
            <div id="previewContainer" class="d-flex flex-wrap gap-3 mb-4"></div>
            <div class="p-4 rounded text-center"style="border: 2px dashed #88304E; background:#fdf7f9;">
             <div class="upload-preview-temp d-flex flex-wrap justify-content-center mb-3"></div>
             <input type="file" id="uploadDokumentasi" class="d-none" accept="image/*" multiple>
             <button class="btn btn-upload mb-2"onclick="document.getElementById('uploadDokumentasi').click();"style="background:#88304E; color:white;">
                <i class="bi bi-upload"></i> Pilih Foto Dokumentasi
            </button>
        </div>
        <div class="mt-3">
            <button id="btnSave" class="btn" style="background:#88304E; color:white;">Simpan</button>
        </div>
    </div>
     </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const uploadInput = document.getElementById('uploadDokumentasi');
        const previewContainer = document.getElementById('previewContainer');
        const uploadBorder = document.querySelector(".upload-preview-temp");
        let tempImages = []; 
        uploadInput.addEventListener('change', function (event) {
            uploadBorder.innerHTML = "";
            tempImages = [];
            const files = event.target.files;
            Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                tempImages.push(e.target.result);
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = "160px";
                img.style.height = "120px";
                img.style.objectFit = "cover";
                img.style.borderRadius = "8px";
                img.style.border = "1px solid #ccc";
                img.style.margin = "5px";
                uploadBorder.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    });
    document.getElementById('btnSave').addEventListener('click', function () {
        if (tempImages.length === 0) {
            alert("Belum ada foto yang dipilih.");
            return;
        }
        tempImages.forEach(src => {
            const img = document.createElement('img');
            img.src = src;
            img.style.width = "160px";
            img.style.height = "120px";
            img.style.objectFit = "cover";
            img.style.borderRadius = "8px";
            img.style.border = "1px solid #ccc";
            img.style.margin = "5px";
            previewContainer.appendChild(img);
        });
        uploadBorder.innerHTML = "";
        tempImages = [];
        uploadInput.value = null;
        alert("Dokumentasi berhasil disimpan!");
    });

});
</script>

</body>
</html>
