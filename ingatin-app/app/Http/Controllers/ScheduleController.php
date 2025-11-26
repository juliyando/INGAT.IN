<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // if (Auth::user()->isPengurus()) {
        //     // Jika Pengurus, tampilkan dashboard/kalender yang memiliki CRUD
        //     // Catatan: Asumsi Anda menampilkan kalender di dashboard Pengurus
        //     return view('pengurus.dashboard');
        // } else {
        //     // Jika Warga, tampilkan kalender Read-Only
        //     return view('kalender.index');
        // }
        return view('kalender.index');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'start' => 'required|date', // Sesuai nama kolom
            'end' => 'nullable|date|after_or_equal:start', // Sesuai nama kolom
        ]);

        if ($validator->fails()) {
            // Mengembalikan error jika validasi gagal
            return back()->withErrors($validator)->withInput();
        }

        Schedule::create([
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'description' => $request->description,
            'color' => $request->color,
            'lokasi' => $request->lokasi, // Tambahkan lokasi jika ada
            'created_by' => Auth::id(),
            'status' => 'upcoming', // Default status saat dibuat Admin
        ]);
        // $item = new Schedule();
        // $item->title = $request->title;
        // $item->start = $request->start;
        // $item->end = $request->end;
        // $item->description = $request->description;
        // $item->color = $request->color;

        // $item->created_by = Auth::id();
        // $item->save();

        if (Auth::user()->isPengurus()) {
            // Jika Pengurus, tampilkan dashboard/kalender yang memiliki CRUD
            // Catatan: Asumsi Anda menampilkan kalender di dashboard Pengurus
            return view('pengurus.dashboard');
        } else {
            // Jika Warga, tampilkan kalender Read-Only
            return view('kalender.index');
        }
    }

    public function getEvents()
    {
        $schedules = Schedule::all();
        return response()->json($schedules);
    }

    public function deleteEvent($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return response()->json(['message' => 'Event deleted successfully']);
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->update([
            'start' => Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
            'end' => Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
        ]);
        return response()->json(['message' => 'Event moved successfully']);
    }

    public function resize(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);
        $newEndDate = Carbon::parse($request->input('end_date'))->setTimezone('UTC');
        $schedule->update(['end' => $newEndDate]);
        return response()->json(['message' => 'Event resized successfully.']);
    }

    // public function search(Request $request)
    // {
    //     $searchKeywords = $request->input('title');
    //     $matchingEvents = Schedule::where('title', 'like', '%' . $searchKeywords . '%')->get();
    //     return response()->json($matchingEvents);
    // }
}
