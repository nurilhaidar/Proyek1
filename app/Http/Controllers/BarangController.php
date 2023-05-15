<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\sc;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $barang = BarangModel::where('kode_barang', 'LIKE', '%' . $request->search . '%')
                ->orWhere('nama_barang', 'LIKE', '%' . $request->search . '%')
                ->orWhere('jumlah_barang', 'LIKE', '%' . $request->search . '%')
                ->paginate(3)->withQueryString();
        } else {
            $barang = BarangModel::paginate(3);
        }
        return view('barang.barang')
            ->with('br', $barang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create_barang')
            ->with('url_form', url('/barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kode_barang' => 'required|string|max:4|unique:barang,kode_barang',
                'nama_barang' => 'required|string|max:50',
                'jumlah_barang' => 'required|integer',
                'kondisi' => 'required|string|max:50',
            ],
            [
                'kode_barang.required' => 'Kode Barang tidak boleh kosong',
                'nama_barang.required' => 'Nama Barang tidak boleh kosong',
                'jumlah_barang.integer' => 'jumlah_barang harus berupa angka',
                'kondisi.required' => 'Kondisi tidak boleh kosong'
            ]
        );


        $data = BarangModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('barang')
            ->with('success', 'Data barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sc  $sc
     * @return \Illuminate\Http\Response
     */
    public function show(BarangModel $barang)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sc  $sc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = BarangModel::find($id);
        return view('barang.create_barang')
            ->with('br', $barang)
            ->with('url_form', url('/barang/' . $id));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sc  $sc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:4|unique:barang,kode_barang,' . $id,
            'nama_barang' => 'required|string|max:50',
            'jumlah_barang' => 'required|integer',
            'kondisi' => 'required|string|max:50',
        ]);

        $data = BarangModel::where('id', '=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('barang')
            ->with('success', 'Data barang Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sc  $sc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangModel::where('id', '=', $id)->delete();
        return redirect('barang')
            ->with('success', 'Data barang Berhasil Dihapus');
    }
}
