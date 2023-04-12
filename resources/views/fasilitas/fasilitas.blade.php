@extends('layout.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fasilitas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Fasilitas</li>
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
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="{{ url('fasilitas/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <form action="/fasilitas" method="GET" class="input-group">
                            <input class="form-control form-control-sidebar" type="search" name="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar" type="submit">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- Table -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Gedung</th>
                                <th>Nama Gedung</th>
                                <th>Kapasitas</th>
                                <th>Lokasi</th>
                                <th>Kondisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($fs->count() > 0)
                                @foreach ($fs as $index => $f)
                                    <tr>
                                        <td>{{ $index + $fs->firstItem() }}</td>
                                        <td>{{ $f->kode_gedung }}</td>
                                        <td>{{ $f->nama_gedung }}</td>
                                        <td>{{ $f->kapasitas }}</td>
                                        <td>{{ $f->lokasi }}</td>
                                        <td>{{ $f->kondisi }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <a href="{{ url('/fasilitas/' . $f->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>
                                            <form method="POST" action="{{ url('/fasilitas/' . $f->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif
                        </tbody>
                    </table><br>
                    {{ $fs->links() }}
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
