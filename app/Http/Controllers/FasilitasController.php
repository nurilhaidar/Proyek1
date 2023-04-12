<?php

namespace App\Http\Controllers;


use App\Models\FasilitasModel;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if($request->has('search')){
                $fasilitas = FasilitasModel::where('kode_gedung','LIKE', '%' .$request->search.'%')
                                            ->orWhere('nama_gedung','LIKE', '%' .$request->search.'%')
                                            ->orWhere('lokasi','LIKE', '%' .$request->search.'%')
                                            ->paginate(3);
            }else{
                $fasilitas = FasilitasModel::paginate(3);
            }
            return view('fasilitas.fasilitas')
                    ->with('fs', $fasilitas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.create_fasilitas')
        ->with('url_form', url('/fasilitas'));
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
            'kode_gedung' => 'required|string|max:5|unique:fasilitas,kode_gedung',
            'nama_gedung' => 'required|string|max:50',
            'kapasitas' => 'required|string|max:10',
            'lokasi' => 'required|string|max:25',
            'kondisi' => 'required|string|max:50',
        ]);

        $data =FasilitasModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('fasilitas')
            ->with('success', 'fasilitas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasModel $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = FasilitasModel::find($id);
        return view('fasilitas.create_fasilitas')
                    ->with('fs', $fasilitas)
                    ->with('url_form', url('/fasilitas/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_gedung' => 'required|string|max:5|unique:fasilitas,kode_gedung,'.$id,
            'nama_gedung' => 'required|string|max:50',
            'kapasitas' => 'required|string|max:10',
            'lokasi' => 'required|string|max:25',
            'kondisi' => 'required|string|max:50',
        ]);

        $data =FasilitasModel::where('id','=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('fasilitas')
            ->with('success', 'fasilitas Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FasilitasModel::where('id', '=', $id)->delete();
        return redirect('fasilitas')
        ->with('success', 'fasilitas Berhasil Dihapus');
    }
}
