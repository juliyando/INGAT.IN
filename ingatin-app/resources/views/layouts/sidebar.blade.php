<div class="sidebar" id="sideMenu">
    <div class="sidebar-header d-flex justify-content-between align-items-center">
        <h5 class="offcanvas-title fw-bold" id="sideMenuLabel" style="color: #DC3545;">
            <img src="{{ asset('images/Logo-ingatin.png') }}" alt="Logo" style="width: 30px;" class="me-2">
            PENGURUS
        </h5>

        {{-- Tombol Tutup Sidebar (Hanya untuk Mobile) --}}
        <button type="button" class="btn-close d-lg-none" data-bs-dismiss="sidebar-mobile" aria-label="Close"></button>
    </div>

    <div class="sidebar-body mt-4">
        <ul class="list-unstyled ps-0">
            {{-- Navigasi Utama --}}
            <li class="mb-3"><a href="{{ route('dashboard') }}"
                    class="p-2 d-block text-decoration-none rounded {{ request()->routeIs('dashboard') ? 'bg-danger text-white fw-bold' : 'text-light' }}"><i
                        class="bi bi-house-door me-2"></i> Dashboard</a></li>
            {{-- <li class="mb-3"><a href="{{ route('admin.calendar') }}"
                    class="p-2 d-block rounded {{ request()->routeIs('admin.calendar') ? 'bg-danger text-white fw-bold' : 'text-light' }}"><i
                        class="bi bi-calendar-event me-2"></i> Kelola Jadwal</a></li>
            <li class="mb-3"><a href="{{ route('admin.registrations.index') }}"
                    class="p-2 d-block rounded {{ request()->routeIs('admin.registrations.index') ? 'bg-danger text-white fw-bold' : 'text-light' }}"><i
                        class="bi bi-people-fill me-2"></i> Cek Partisipasi</a></li>
            <li class="mb-3"><a href="{{ route('admin.status.kelola') }}"
                    class="p-2 d-block rounded {{ request()->routeIs('admin.status.kelola') ? 'bg-danger text-white fw-bold' : 'text-light' }}"><i
                        class="bi bi-gear me-2"></i> Kelola Status</a></li> --}}

            {{-- Logout --}}
            <li class="mt-5 pt-3 border-top"><a href="#"
                    onclick="document.getElementById('logout-form').submit();" class="text-warning text-decoration-none d-block p-2"><i
                        class="bi bi-box-arrow-right me-2"></i> Logout</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </ul>
    </div>
</div>
