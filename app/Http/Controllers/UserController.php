<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $barang = BarangModel::all();
        return view('user.content.form', compact('barang'))->with('url_form', url('/peminjaman'));
    }

    public function barang()
    {
        $barang = BarangModel::all();
        return view('user.content.barang')->with('br', $barang);
    }
}
