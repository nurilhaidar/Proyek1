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

            <a href="{{url('oki/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            <!-- SidebarSearch Form -->
            <div class="form-inline">
              <div class="input-group" >
                <form action="/oki" method="GET">
                <input class="form-control form-control-sidebar" type="search" name="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>
            <br>
            <!-- Table -->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama OKI</th>
                  <th>Ketua OKI</th>
                  <th>Jumlah Anggota</th>
                  <th>Akun Sosial Media</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if($oki->count() > 0)
                  @foreach($oki as $index => $o)
                    <tr>
                      <td>{{$index + $oki -> firstItem()}}</td>
                      <td>{{$o->kode}}</td>
                      <td>{{$o->nama_oki}}</td>
                      <td>{{$o->ketua_oki}}</td>
                      <td>{{$o->jumlah_anggota}}</td>
                      <td>{{$o->akun}}</td>
                      <td>
                        <!-- Bikin tombol edit dan delete -->
                        <a href="{{ url('/oki/'. $o->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                        <form method="POST" action="{{ url('/oki/'.$o->id) }}" >
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                        </form>

                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
                @endif
              </tbody>
            </table><br>
            {{ $oki->links() }}
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

  