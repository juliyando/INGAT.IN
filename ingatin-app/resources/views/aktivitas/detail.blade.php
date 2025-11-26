@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <a href="{{ route('daftar') }}" class="btn btn-sm btn-secondary mb-3"><i class="bi bi-arrow-left me-1"></i>
            Kembali ke Daftar Kegiatan</a>

        <div class="card shadow-lg border-0" id="activity-detail-card" style="border-radius: 12px; overflow: hidden;">
            <div class="row g-0">

                {{-- KOLOM KIRI: FLYER BESAR (60%) --}}
                <div class="col-md-7" style="background-color: #343A40;">
                    <div style="height: 100%; min-height: 400px; background-color: #343A40;">
                        <img src="{{ asset('storage/' . ($activity->image_flyer_path ?? 'images/default-flyer.png')) }}"
                            alt="Flyer Kegiatan" class="w-100 h-100 object-fit-cover" style="opacity: 0.8;">
                    </div>
                </div>

                {{-- KOLOM KANAN: DETAIL & TOMBOL AKSI (40%) --}}
                <div class="col-md-5 p-5">
                    <h1 class="fw-bolder mb-2" style="color: #DC3545;">{{ $activity->title }}</h1>
                    <p class="text-muted small mb-4">Dibuat oleh Pengurus pada
                        {{ $activity->created_at->translatedFormat('d M Y') }}</p>
                    <hr>

                    {{-- INFO UTAMA --}}
                    <h5 class="fw-bold mt-4" style="color: #343A40;"><i class="bi bi-geo-alt-fill me-2"></i> Lokasi:</h5>
                    <p class="lead">{{ $activity->lokasi }}</p>

                    <h5 class="fw-bold mt-3" style="color: #343A40;"><i class="bi bi-clock-fill me-2"></i> Waktu:</h5>
                    <p class="lead">{{ $activity->start->translatedFormat('l, d F Y') }} pukul
                        {{ $activity->start->translatedFormat('H:i') }} WIB</p>

                    <h5 class="fw-bold mt-3" style="color: #343A40;"><i class="bi bi-file-text me-2"></i> Deskripsi:</h5>
                    <p class="small text-secondary">{{ $activity->description }}</p>

                    <hr class="my-4">

                    {{-- AREA AKSI DINAMIS --}}
                    <div id="action-area" class="mt-4">

                        {{-- Tampilan Pesan Flash (Tambahkan di bagian atas view, di bawah container) --}}
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        {{-- Status Pendaftaran --}}
                        <div class="d-flex align-items-center mb-3">
                            <span class="fw-bold me-3">Status Anda:</span>
                            <span id="reg-status-text"
                                class="fw-bold p-2 rounded 
            {{ $isRegistered ? 'bg-success text-white' : 'bg-warning text-dark' }}">
                                {{ $isRegistered ? 'TERDAFTAR' : 'BELUM TERDAFTAR' }}
                            </span>
                        </div>

                        {{-- Tombol Aksi (Form Submission) --}}
                        <div id="button-container">
                            @if ($activity->status == 'finished' || $activity->status == 'ongoing')
                                {{-- Non-interaktif jika sudah selesai/sedang berlangsung --}}
                                <button class="btn btn-secondary fw-bold w-100 disabled" disabled>
                                    Kegiatan Sudah Selesai / Pendaftaran Ditutup
                                </button>
                            @elseif ($isRegistered)
                                {{-- TOMBOL BATALKAN --}}
                                <p class="fw-bold text-success">Kamu sudah terdaftar.</p>

                                <form action="{{ route('schedules.register.destroy', $activity->id) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin membatalkan pendaftaran ini?');">
                                    @csrf
                                    <button type="submit" class="btn btn-warning fw-bold w-100"><i
                                            class="bi bi-x-circle me-1"></i> BATALKAN PENDAFTARAN</button>
                                </form>
                            @else
                                {{-- TOMBOL DAFTAR --}}
                                <form action="{{ route('schedules.register.store') }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin mendaftar kegiatan ini?');">
                                    @csrf
                                    <input type="hidden" name="activity_id" value="{{ $activity->id }}">
                                    <button type="submit" class="btn btn-danger fw-bold w-100"><i
                                            class="bi bi-pencil-square me-1"></i> DAFTAR SEKARANG</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL KONFIRMASI (DAFTAR & BATALKAN) --}}
    {{-- @include('activities.partials.confirmation_modals') --}}
@endsection
