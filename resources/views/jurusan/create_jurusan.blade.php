@extends('layout.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jurusan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Jurusan</li>
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
                {!! (isset($jrs))? method_field('PUT'): ''!!}
                <div class="form-group">
                    <label>Kode</label>
                    <input class="form-control @error('kode') is-invalid @enderror" value="{{ isset($jrs)? $jrs->kode :old('kode') }}" name="kode" type="text"/>
                    @error('kode')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($jrs)? $jrs->nama :old('nama') }}" name="nama" type="text"/>
                    @error('nama')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ketua Jurusan</label>
                    <input class="form-control @error('ketua_jurusan') is-invalid @enderror" value="{{ isset($jrs)? $jrs->ketua_jurusan :old('ketua_jurusan') }}" name="ketua_jurusan" type="text"/>
                    @error('ketua_jurusan')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jumlah Prodi</label>
                    <input class="form-control @error('jml_prodi') is-invalid @enderror" value="{{ isset($jrs)? $jrs->jml_prodi : old('jml_prodi') }}" name="jml_prodi" type="text" />
                    @error('jml_prodi')
                        <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Akreditasi</label>
                    <input class="form-control @error('Akreditasi') is-invalid @enderror" value="{{ isset($jrs)? $jrs->akreditasi : old('akreditasi') }}" name="akreditasi" type="text" />
                    @error('akreditasi')
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
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection

