<footer class="mt-auto pt-5 pb-3" style="background-color: #810d21; color: #E9ECEF;">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="fw-bold mb-3" style="color: #FFC107;">INGAT.IN!</h5>
                <p class="small">
                    Sistem Informasi & Pengingat Kegiatan Warga RT.19.
                </p>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        Alamat Sekretariat: [Alamat Lengkap RT.19]
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope-fill me-2"></i>
                        Email: <a href="mailto:[damarafmitzard@gmail.com]" class="text-decoration-none"
                            style="color: #E9ECEF;">rt19@gmail.com</a>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-whatsapp me-2"></i>
                        Hubungi Pengurus: <a href="https://wa.me/[082213577889]" target="_blank" class="text-decoration-none"
                            style="color: #E9ECEF;">+62 8221356789</a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h5 class="fw-bold mb-3">Navigasi Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ url('/') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Beranda</a></li>
                    <li class="mb-2"><a href="{{ url('/kegiatan') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Daftar Kegiatan</a></li>
                    <li class="mb-2"><a href="{{ url('/kalender') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Kalender Kegiatan</a></li>
                    <li class="mb-2"><a href="{{ url('/arsip') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Arsip Kegiatan</a></li>
                </ul>
            </div>

            {{-- <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h5 class="fw-bold mb-3">Informasi</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ url('/syarat-ketentuan') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Syarat & Ketentuan</a></li>
                    <li class="mb-2"><a href="{{ url('/kebijakan-privasi') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Kebijakan Privasi</a></li>
                    <li class="mb-2"><a href="{{ url('/bantuan') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Pusat Bantuan</a></li>
                    <li class="mb-2"><a href="{{ url('/login') }}" class="text-decoration-none"
                            style="color: #E9ECEF;">Login Pengurus</a></li>
                </ul>
            </div> --}}

            {{-- <div class="col-md-2">
                <h5 class="fw-bold mb-3">Ikuti Kami</h5>
                <a href="[Link Instagram RT]" target="_blank" class="text-decoration-none me-3"
                    style="color: #E9ECEF; font-size: 1.5rem;">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="[Link Facebook RT]" target="_blank" class="text-decoration-none me-3"
                    style="color: #E9ECEF; font-size: 1.5rem;">
                    <i class="bi bi-facebook"></i>
                </a>
            </div> --}}

        </div>

        <hr class="mt-4 mb-3" style="border-color: rgba(255, 255, 255, 0.1);">

        <div class="text-center small text-white-50">
            &copy; {{ date('Y') }} INGAT.IN! RT.19. Dikelola oleh Tim Pengurus RT 19.
        </div>
    </div>
</footer>
