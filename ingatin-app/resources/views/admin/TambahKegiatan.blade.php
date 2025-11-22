<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingat.in - Tambah Kegiatan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #FFF1F1;
            margin: 0;
            padding: 0;
            padding-top: 25px;
            font-family: 'Raleway', sans-serif;
        }

        .header-bar {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 0px 20px;
        }

        .header-logo {
            width: 30px;
            height: auto;
        }

        .back-btn {
            font-size: 1.5rem;
            color: #88304E;
            cursor: pointer;
            text-decoration: none;
        }

        .back-btn:hover {
        color: #A44A6B; /* warna lebih terang */
        transform: scale(1.15);
    }

        .brand-text {
            font-size: 1.5rem;
            font-weight: 600;
            color: #88304E;
            letter-spacing: 1px;
        }

        .custom-card {
            width: 100%;
            max-width: 600px;
            border-radius: 12px;
            padding: 25px;
        }

        textarea {
            height: 200px; /* membuat lebih besar */
        }

        .btn-save {
            background-color: #913151;
            color: #ffffff;
            border: none;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
}

.btn-save:hover {
    background-color: #6d223d; /* warna hover */
    color: #000000; /* teks sedikit lebih gelap */
    transform: translateY(-2px);
}
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header-bar">
        <a href="{{ route('admin.dashboard') }}" class="back-btn">
            <i class="bi bi-arrow-left-circle-fill"></i>
        </a>

        <img src="{{ asset('images/Logo-ingatin.png') }}" class="header-logo" alt="Logo Ingat.in">

        <span class="brand-text">Tambah Kegiatan</span>
    </div>

    <!-- Card berada di tengah -->
    <div class="d-flex justify-content-center align-items-center" style="min-height: 90vh;">
        <div class="card custom-card shadow-sm">

            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama kegiatan">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" class="form-control" placeholder="Masukkan lokasi kegiatan">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Waktu</label>
                        <input type="datetime-local" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" placeholder="Tuliskan deskripsi kegiatan"></textarea>
                    </div>

                    <button type="submit" class="btn btn-save w-100 text-white">
                        Simpan Kegiatan
                    </button>

                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
