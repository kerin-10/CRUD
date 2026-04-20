<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penghuni;
use App\Models\DataSewa;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPenghuni = Penghuni::count();

        $totalKamar = Kamar::count();
        $kamarKosong = Kamar::where('status', 'kosong')->count();
        $kamarTerisi = Kamar::where('status', 'terisi')->count();

        $kategoriKamar = Kamar::select('kategori')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('kategori')
            ->get();

        $lunas = DataSewa::where('status_pembayaran', 'lunas')->count();
        $belumLunas = DataSewa::where('status_pembayaran', 'belum_lunas')->count();

        return view('penghuni.dashboard', compact(
            'totalPenghuni',
            'totalKamar',
            'kamarKosong',
            'kamarTerisi',
            'kategoriKamar',
            'lunas',
            'belumLunas'
        ));
    }
}