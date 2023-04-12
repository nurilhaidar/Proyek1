<?php

namespace App\Http\Controllers;

use App\Models\oki;
use Illuminate\Http\Request;

class OKIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $oki = oki::where('nama_oki', 'LIKE', '%' . $request->search . '%')
                ->orWhere('ketua_oki', 'LIKE', '%' . $request->search . '%')
                ->orWhere('kode', 'LIKE', '%' . $request->search . '%')
                ->paginate(3);
        } else {
            $oki = oki::paginate(3);
        }
        return view('oki.oki')
            ->with('oki', $oki);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oki.create_oki')
            ->with('url_form', url('/oki'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'kode' => 'required|string|max:10|unique:oki,kode',
            'nama_oki' => 'required|string|max:100',
            'ketua_oki' => 'required|string|max:100',
            'jumlah_anggota' => 'required|string|max:50',
            'akun' => 'required|string|max:100',
        ]);

        $data = oki::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('oki')
            ->with('success', 'Data OKI Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\oki  $oki
     * @return \Illuminate\Http\Response
     */
    public function show(oki $oki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\oki  $oki
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oki = oki::find($id);
        return view('oki.create_oki')
            ->with('oki', $oki)
            ->with('url_form', url('/oki/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OKI $oki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:10',
            'nama_oki' => 'required|string|max:100',
            'ketua_oki' => 'required|string|max:100',
            'jumlah_anggota' => 'required|string|max:50',
            'akun' => 'required|string|max:100',
        ]);

        $data = oki::where('id', '=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('oki')
            ->with('success', 'Data OKI Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OKI  $oki
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        oki::where('id', '=', $id)->delete();
        return redirect('oki.oki')
            ->with('success', 'Data OKI Berhasil Dihapus');
    }
}
