@extends('layout.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>OKI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">OKI Page</li>
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
          <h3 class="card-title">kelas : TI-2A</h3>

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
            <form method="POST" action="{{ $url_form}}">
                @csrf
                {!! (isset($oki))? method_field('PUT'): ''!!}
                <div class="form-group">
                    <label>Kode</label>
                    <input class="form-control @error('kode') is-invalid @enderror" value="{{ isset($oki)? $oki->kode :old('kode') }}" name="kode" type="text"/>
                    @error('kode')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama OKI</label>
                    <input class="form-control @error('nama_oki') is-invalid @enderror" value="{{ isset($oki)? $oki->nama_oki :old('nama_oki') }}" name="nama_oki" type="text"/>
                    @error('nama_oki')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ketua OKI</label>
                    <input class="form-control @error('ketua_oki') is-invalid @enderror" value="{{ isset($oki)? $oki->ketua_oki :old('ketua_oki') }}" name="ketua_oki" type="text"/>
                    @error('ketua_oki')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jumlah Anggota</label>
                    <input class="form-control @error('jumlah_anggota') is-invalid @enderror" value="{{ isset($oki)? $oki->jumlah_anggota : old('jumlah_anggota') }}" name="jumlah_anggota" type="text" />
                    @error('jumlah_anggota')
                        <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Akun Sosial Media</label>
                    <input class="form-control @error('akun') is-invalid @enderror" value="{{ isset($oki)? $oki->akun : old('akun') }}" name="akun" type="text" />
                    @error('akun')
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

  