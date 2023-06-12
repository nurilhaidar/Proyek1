<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanModel;
use App\Models\StatusModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date = date('Y-m-d', strtotime('-7 days'));
        $total = PeminjamanModel::count();
        $pinjam = PeminjamanModel::where('created_at', '>=', $date)->count();
        $statusKonfirmasi = StatusModel::where('status', 'Belum Dikonfirmasi')->count();
        $statusKembali = StatusModel::where('status', 'Diterima')->count();
        return view('admin.home', compact('total', 'pinjam', 'statusKonfirmasi', 'statusKembali'));
    }
}
