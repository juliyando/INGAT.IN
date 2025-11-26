<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ScheduleRegistration;
use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Response;

class ScheduleRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // Anda mungkin ingin menambahkan middleware khusus warga di sini
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        // 1. Ambil SEMUA kegiatan (upcoming, ongoing, finished)
        $query = Schedule::orderBy('start', 'desc'); // Diurutkan dari yang terbaru

        $activities = $query->with(['registrations' => function ($q) use ($user) {
            $q->where('user_id', $user->id);
        }])->paginate(9);

        // 3. Kirim data ke view
        return view('aktivitas.index', compact('activities'));
    }

    public function store(Request $request)
    {
        // Validasi sederhana (pastikan activity_id ada)
        $request->validate(['activity_id' => 'required|exists:schedules,id']);

        $activityId = $request->activity_id;
        $userId = Auth::id();

        try {
            // 1. Buat entri pendaftaran baru
            ScheduleRegistration::create([
                'user_id' => $userId,
                'activity_id' => $activityId,
                'status' => 'registered', // Status default
            ]);

            // 2. (Simulasi WA Gateway)
            // Logika mengirim notifikasi WA ke nomor $user->nomor_telepon akan diletakkan di sini.

            return redirect()->back()->with('success', 'Pendaftaran kegiatan berhasil! Notifikasi WA telah dikirim.');
        } catch (\Throwable $e) {
            // Jika terjadi error (misal: user sudah terdaftar karena unique constraint)
            return redirect()->back()->with('error', 'Gagal mendaftar. Anda mungkin sudah terdaftar pada kegiatan ini.');
        }
    }

    public function destroy($id) // $id di sini adalah ID Kegiatan (activity_id)
    {
        $userId = Auth::id();

        // 1. Cari pendaftaran milik user untuk kegiatan ini
        $registration = ScheduleRegistration::where('user_id', $userId)
            ->where('activity_id', $id)
            ->first();

        if ($registration) {
            $registration->delete(); // Hapus entri pendaftaran
            return redirect()->back()->with('success', 'Pembatalan pendaftaran berhasil.');
        }

        return redirect()->back()->with('error', 'Pendaftaran tidak ditemukan.');
    }

    public function show(Schedule $activity)
    {
        // 1. Ambil status pendaftaran user saat ini
        // Menggunakan with('registrations') dari Model Schedule akan lebih efisien jika sudah di-eager load
        $isRegistered = ScheduleRegistration::where('user_id', Auth::id())
            ->where('activity_id', $activity->id)
            ->exists();

        // 2. Kirim data ke view
        // Pastikan view resources/views/activities/show.blade.php sudah ada
        return view('aktivitas.detail', compact('activity', 'isRegistered'));
    }
}
