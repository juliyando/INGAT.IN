@extends('layouts.app')

@section('content')
    <div class="container py-5">

        {{-- Area Filter dan Judul --}}
        <div class="row mb-4">
            <div class="col-md-9">
                <h2 class="display-5 fw-bold" style="color: #DC3545;">Daftar Kegiatan Komunitas</h2>
                <p class="lead text-muted">Ayo daftar dan aktifkan kontribusimu di komunitas RT.19!</p>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-end">
                {{-- Placeholder untuk Filter --}}
                <a href="#" class="btn btn-sm btn-outline-secondary">Filter Tanggal</a>
            </div>
        </div>

        {{-- Tampilan Pesan Flash (Sukses/Error dari Controller) --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Menggunakan row-cols-md-3 untuk 3 card per baris --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($activities as $activity)
                @php
                    // --- 1. Ambil Status ---
                    $activityStatus = $activity->status;
                    $isRegistered = $activity->registrations->isNotEmpty(); // TRUE jika sudah ada entri pendaftaran

                    // --- 2. Inisialisasi Tampilan ---
                    $buttonText = '';
                    $buttonClass = '';
                    $buttonDisabled = false;
                    $statusText = '';
                    $statusTextColor = 'text-warning';

                    // --- 3. Logika Penentuan Status & Tombol ---
                    if ($activityStatus == 'finished') {
                        $statusText = 'Selesai';
                        $statusTextColor = 'text-secondary';
                        $buttonText = 'LIHAT DOKUMENTASI';
                        $buttonClass = 'btn-secondary';
                        $buttonDisabled = true;
                    } elseif ($activityStatus == 'ongoing') {
                        $statusText = 'Sedang Berlangsung';
                        $statusTextColor = 'text-info';
                        $buttonText = 'TIDAK DAPAT DAFTAR';
                        $buttonClass = 'btn-secondary';
                        $buttonDisabled = true;
                    } elseif ($isRegistered) {
                        // Status: upcoming/ongoing, dan sudah terdaftar
                        $statusText = 'Terdaftar';
                        $statusTextColor = 'text-success';
                        $buttonText = 'BATALKAN';
                        $buttonClass = 'btn-warning';
                    } else {
                        // Status: upcoming, dan belum terdaftar
                        $statusText = 'Belum Terdaftar';
                        $statusTextColor = 'text-warning';
                        $buttonText = 'DAFTAR';
                        $buttonClass = 'btn-danger';
                    }
                @endphp

                <div class="col">
                    <div class="card h-100 border-0 shadow-lg overflow-hidden"
                        style="border-radius: 12px; background-color: #343A40; color: white;">

                        {{-- HEADER IMAGE / FLYER --}}
                        <div class="position-relative" style="height: 150px; background-color: #DC3545;">
                            {{-- Ganti dengan path image flyer Anda --}}
                            <img src="{{ asset('storage/' . ($activity->image_flyer_path ?? 'images/default-flyer.png')) }}"
                                alt="Flyer Kegiatan" class="w-100 h-100 object-fit-cover" style="opacity: 0.8;">
                        </div>

                        <div class="card-body p-4 flex-grow-1 position-relative">
                            <h5 class="fw-bold mb-3" style="color: #FFC107;">{{ $activity->title }}</h5>

                            <ul class="list-unstyled mb-3 small text-muted">
                                <li><i class="bi bi-geo-alt-fill me-2" style="color: #DC3545;"></i> Lokasi:
                                    **{{ $activity->lokasi }}**</li>
                                <li><i class="bi bi-calendar-check-fill me-2" style="color: #DC3545;"></i> Tanggal:
                                    **{{ $activity->start }}**</li>
                                <li><i class="bi bi-clock-fill me-2" style="color: #DC3545;"></i> Status Kegiatan:
                                    **{{ strtoupper($activityStatus) }}**</li>
                            </ul>
                        </div>

                        {{-- FOOTER CARD: Tombol Aksi --}}
                        <div class="card-footer border-0 p-3 d-flex justify-content-between align-items-center"
                            style="background-color: #2b3035;">

                            <span class="small fw-bold {{ $statusTextColor }}">
                                Status Anda: {{ $statusText }}
                            </span>

                            {{-- Tombol LIHAT SELENGKAPNYA / BATALKAN --}}
                            @if ($isRegistered)
                                {{-- 1. Tombol BATALKAN (Muncul di List Card) --}}
                                <form action="{{ route('schedules.register.destroy', $activity->id) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin membatalkan pendaftaran ini?');">
                                    @csrf
                                    <button type="submit" class="btn btn-sm fw-bold {{ $buttonClass }}"
                                        style="color: white;">
                                        {{ $buttonText }}
                                    </button>
                                </form>
                            @elseif ($activityStatus == 'upcoming')
                                {{-- 2. Tombol DAFTAR (Muncul di List Card) --}}
                                <form action="{{ route('schedules.register.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="activity_id" value="{{ $activity->id }}">
                                    <button type="submit" class="btn btn-sm fw-bold {{ $buttonClass }}"
                                        style="color: white;">
                                        {{ $buttonText }}
                                    </button>
                                </form>
                            @else
                                {{-- 3. Tombol DISABLED (Finished/Ongoing) --}}
                                <button type="button" class="btn btn-sm fw-bold {{ $buttonClass }} disabled"
                                    style="color: white;" disabled>
                                    {{ $buttonText }}
                                </button>
                            @endif

                            {{-- Tombol Lihat Detail (Di sebelah tombol aksi jika ada) --}}
                            <a href="{{ route('activity.show', $activity->id) }}"
                                class="btn btn-sm btn-outline-info fw-bold ms-2">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Paginasi --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $activities->links() }}
        </div>

    </div>
@endsection
