<?php

namespace App\Http\Controllers\User;

use App\Models\Absensi;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AbsenController extends Controller
{
    private $menu = 'absensi';

    public function userIndex()
    {
        // $datas = Absensi::with('agenda')->get();
        $datas = Absensi::whereHas('user', function ($query) {
            $query->where('nuptk', auth()->user()->nuptk);
        })->with(['user', 'agenda'])->latest()->get();
        $menu = $this->menu;

        return view('pages.user.absen.index', compact('menu', 'datas'));
    }

    public function userCreate()
    {
        $menu = $this->menu;
        $agendas = Agenda::where('status', 'publish')
            ->latest()
            ->take(1)
            ->get();
        return view('pages.user.absen.create', compact('agendas', 'menu'));
    }

    public function showQr(Request $request){
        $menu = $this->menu;
        $agenda = Agenda::find($request->agenda_id);

        return view('pages.user.absen.show', compact('agenda', 'menu'));
    }

    public function absenQr($qrcode){
        $menu = $this->menu;
        
        $agenda = Agenda::where('qrcode', $qrcode)->first();

        return view('pages.user.absen.qr-code', compact('agenda', 'menu'));
    }

    private function hitungJarak($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000; // meter
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return $earthRadius * $c;
    }

    public function userStore(Request $request)
    {

        $user = Auth::user();

        $validated = $request->validate([
            'agenda_id' => 'required|exists:agendas,id',
            'user_latitude' => 'required|numeric',
            'user_longitude' => 'required|numeric',
            'status' => 'required|in:hadir,tidak hadir,izin,sakit,terlambat',
            'keterangan' => 'nullable|string'
        ]);

        $agenda = Agenda::findOrFail($validated['agenda_id']);

        $jarak = $this->hitungJarak(
            $agenda->latitude,
            $agenda->longitude,
            $validated['user_latitude'],
            $validated['user_longitude']
        );

        $isValid = $jarak <= ($agenda->radius ?? 50);

        Absensi::create([
            'agenda_id' => $agenda->id,
            'user_id' => $user->id,
            'user_latitude' => $validated['user_latitude'],
            'user_longitude' => $validated['user_longitude'],
            'jarak' => round($jarak, 2),
            'isvalid' => $isValid,
            'status' => $validated['status'],
            'keterangan' => $validated['keterangan'] ?? null,
        ]);

        return redirect()->route('user.absensi.index')->with('success', 'Data absensi berhasil disimpan');
    }
}
