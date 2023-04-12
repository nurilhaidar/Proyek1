<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
<<<<<<< HEAD
        if ($request->has('search')) {
            $jurusan = Jurusan::where('nama', 'LIKE', '%' . $request->search . '%')
                ->orWhere('ketua_jurusan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('kode', 'LIKE', '%' . $request->search . '%')
                ->paginate(3);
        } else {
            $jurusan = Jurusan::paginate(3);
        }
        return view('jurusan')
            ->with('jrs', $jurusan);
=======
            if($request->has('search')){
                $jurusan = Jurusan::where('nama', 'LIKE', '%' .$request->search.'%')
                                    ->orWhere('ketua_jurusan', 'LIKE', '%' .$request->search.'%')
                                    ->orWhere('kode', 'LIKE', '%' .$request->search.'%')
                                    ->paginate(3);
            }else{
                $jurusan = Jurusan::paginate(3);
            }
            return view('jurusan')
                    ->with('jrs', $jurusan);
>>>>>>> ee6861cf5d97c9a22ad57a6fc126c3c6011aa08c
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create_jurusan')
            ->with('url_form', url('/jurusan'));
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
            'kode' => 'required|string|max:10|unique:jurusan,kode',
            'nama' => 'required|string|max:100',
            'ketua_jurusan' => 'required|string|max:100',
            'jml_prodi' => 'required|string|max:50',
            'akreditasi' => 'required|string|max:2',
        ]);

        $data = Jurusan::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('jurusan')
            ->with('success', 'Jurusan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        return view('jurusan.create_jurusan')
            ->with('jrs', $jurusan)
            ->with('url_form', url('/jurusan/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
<<<<<<< HEAD
            'kode' => 'required|string|max:10',
=======
            'kode' => 'required|string|max:10|unique:jurusan,kode,'.$id,
>>>>>>> ee6861cf5d97c9a22ad57a6fc126c3c6011aa08c
            'nama' => 'required|string|max:100',
            'ketua_jurusan' => 'required|string|max:100',
            'jml_prodi' => 'required|string|max:50',
            'akreditasi' => 'required|string|max:2',
        ]);

        $data = Jurusan::where('id', '=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('jurusan')
            ->with('success', 'Jurusan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jurusan::where('id', '=', $id)->delete();
        return redirect('jurusan')
            ->with('success', 'Jurusan Berhasil Dihapus');
    }
}
