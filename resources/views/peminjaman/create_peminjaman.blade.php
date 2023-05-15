@extends('layout.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Form Peminjaman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Form Peminjaman</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Form Peminjaman</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ $url_form }}">
                        @csrf
                        {!! isset($br) ? method_field('PUT') : '' !!}
                        <div class="form-group">
                            <label>NAMA PEMINJAM</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror"
                                value="{{ isset($br) ? $br->nama_barang : old('nama_barang') }}" name="nama_barang"
                                type="text" />
                            @error('nama_barang')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>ASAL OKI</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror"
                                value="{{ isset($br) ? $br->nama_barang : old('nama_barang') }}" name="nama_barang"
                                type="text" />
                            @error('nama_barang')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>KODE BARANG</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror"
                                value="{{ isset($br) ? $br->kode_barang : old('kode_barang') }}" name="kode_barang"
                                type="text" />
                            @error('kode_barang')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NAMA BARANG</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror"
                                value="{{ isset($br) ? $br->nama_barang : old('nama_barang') }}" name="nama_barang"
                                type="text" />
                            @error('nama_barang')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>JUMLAH BARANG</label>
                            <input class="form-control @error('jumlah_barang') is-invalid @enderror"
                                value="{{ isset($br) ? $br->jumlah_barang : old('jumlah_barang') }}" name="jumlah_barang"
                                type="text" />
                            @error('jumlah_barang')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>KONDISI</label>
                            <input class="form-control @error('kondisi') is-invalid @enderror"
                                value="{{ isset($br) ? $br->kondisi : old('kondisi') }}" name="kondisi" type="text" />
                            @error('kondisi')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="submit">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Kelompok 8
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
