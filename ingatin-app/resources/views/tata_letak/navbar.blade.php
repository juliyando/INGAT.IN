<!-- resources/views/layouts/navbar.blade.php -->
<nav class="navbar">
  <div class="container-fluid d-flex align-items-center">
    <div class="d-flex align-items-center">
      <button class="btn-hamburger me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu" aria-controls="sideMenu">
        <i class="bi bi-list"></i>
      </button>

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
      <li class="mb-3"><a href="#"><i class="bi bi-house-door me-2"></i> Beranda</a></li>
      <li class="mb-3"><a href="#"><i class="bi bi-calendar-event me-2"></i> Semua Kegiatan</a></li>
      <li class="mb-3"><a href="#"><i class="bi bi-archive me-2"></i> Arsip Kegiatan</a></li>
      <li class="mb-3"><a href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a></li>
    </ul>
  </div>
</div>
