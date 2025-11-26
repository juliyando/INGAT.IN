<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Ingat.in')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Raleway', sans-serif;
      font-weight: 600;
    }

    body {
      background-color: #FFF1F1;
      margin: 0;
      padding: 50px 0 0 0;
    }

    .btn-custom {
        background-color: #88304E;
        color: #fff;
        border: none;
        padding: 0.5rem 1.2rem;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }
    .btn-custom:hover {
    background-color: #a43a63;
}
.btn-custom i {
    font-size: 1.1rem;
  }
   
  .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;              
      z-index: 1030;            
      background: linear-gradient(90deg, #88304E, #C1203A);
      padding: 0.5rem 1rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}
.navbar-brand {
      display: flex;
      align-items: center;
      color: white !important;
      letter-spacing: 1px;
      font-size: 1.2rem;
    }

    .navbar-brand img {
      height: 35px;
      margin: 0 8px;
    }

    .btn-hamburger {
      border: none;
      background: transparent;
      color: white;
      font-size: 1.6rem;
      padding: 0;
    }

    .offcanvas {
      background-color: #fff;
      width: 250px;
    }

    .offcanvas a {
      text-decoration: none;
      color: #333;
      display: flex;
      align-items: center;
      transition: color 0.2s;
    }

    .offcanvas a:hover {
      color: #C1203A;
    }

    .offcanvas-title {
      font-size: 1.1rem;
      color: #88304E;
    }

    .kegiatan-card {
      background-color: #fff;
      border-top-left-radius: 0;
      border-bottom-right-radius: 0;
      border-top-right-radius: 25px;
      border-bottom-left-radius: 25px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      height: 250px;
      display: flex;
      flex-direction: column; 
      justify-content: space-between;
      padding: 10px;
    }

    .kegiatan-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .card-title {
      color: #88304E;
      font-weight: bold;
    }

    .btn-edit {
      background-color: #88304E;
      color: white;
    }

    .btn-edit:hover {
      background-color: #702642;
    }

    .btn-hapus {
      background-color: #C1203A;
      color: white;
    }

    .btn-hapus:hover {
      background-color: #a81830;
    }

    .btn-ToArsip {
      background-color: #00a2ff;
      color: white; 
    }

    .btn-ToArsip:hover {
      background-color: #2987bd;
    }


    .btn-dokumentasi {
            background-color: #88304E;
            color: white;
            border: none;
            transition: 0.3s;
        }
    .btn-dokumentasi:hover {
            background-color: #6b223d;
            color: #fff;
        }

    /* 🔹 Konten pas ke layar */
    .content-wrapper {
      width: 100%;
      padding: 20px 24px; /* Jarak lembut biar tidak mepet total */
    }

    .detail-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        padding: 20px;
    }

    .detail-card {
        width: 95%; /* Hampir memenuhi layar */
        max-width: 1400px;
        background: #ffffff;
        padding: 40px;
        border-top-left-radius: 0;
        border-bottom-right-radius: 0;
        border-top-right-radius: 25px;
        border-bottom-left-radius: 25px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .btn-upload {
        background-color: #88304E;
        color: #fff;
        border: none;
        padding: 0.45rem 1rem;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-upload:hover {
        background-color: #6d243d;
    }
    @media (min-width: 768px) {
      .content-wrapper {
        padding: 32px 40px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="container-fluid d-flex align-items-center">
      <div class="d-flex align-items-center">
        <!-- Hamburger -->
        <button class="btn-hamburger me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu" aria-controls="sideMenu">
          <i class="bi bi-list"></i>
        </button>

        <!-- Logo & Title -->
        <a class="navbar-brand d-flex align-items-center mb-0" href="#">
          <img src="{{ asset('images/Logo-ingatin.png') }}" alt="Logo Ingat.in">
          INGAT.IN
        </a>
      </div>
    </div>
  </nav>

  <!-- Sidebar / Offcanvas -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sideMenu" aria-labelledby="sideMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sideMenuLabel">Menu Navigasi</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled">
        <li class="mb-3"><a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door me-2"></i> Beranda</a></li>
        <li class="mb-3"><a href="{{ route('admin.SemuaKegiatan') }}"><i class="bi bi-calendar-event me-2"></i> Semua Kegiatan</a></li>
        <li class="mb-3"><a href="{{ route('admin.ArsipKegiatan') }}"><i class="bi bi-archive me-2"></i> Arsip Kegiatan</a></li>
        <li class="mb-3"><a href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a></li>
      </ul>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container-fluid mt-4 px-5">
    @yield('content')
  </div>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
