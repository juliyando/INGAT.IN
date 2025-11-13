<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Ingat.in')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Google Font: Raleway SemiBold -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Raleway', sans-serif;
      font-weight: 600;
    }
    .navbar {
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
  </style>
</head>
<body>

  {{-- Include Navbar --}}
  @include('layouts.navbar')

  {{-- Konten halaman --}}
  <div class="container mt-4">
    @yield('content')
  </div>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
