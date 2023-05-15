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
                    <h3 class="card-title">Form Peminjaman</h3>

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
                    <a href="{{ url('peminjaman/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <form action="/peminjaman" method="GET" class="input-group">
                            <input class="form-control form-control-sidebar" type="search" name="search"
                                placeholder="Search" aria-label="Search">
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
                                <th>Nama Peminjam</th>
                                <th>Asal Oki</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Surat</th>
                                <th>Jaminan</th>
                                <th>Kondisi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pj->count() > 0)
                                @foreach ($pj as $index => $p)
                                    <tr>
                                        <td>{{ $index + $pj->firstItem() }}</td>
                                        <td>{{ $p->nama_peminjam }}</td>
                                        <td>{{ $p->asal_oki }}</td>
                                        <td>{{ $p->kode_barang }}</td>
                                        <td>{{ $p->nama_barang }}</td>
                                        <td>{{ $p->jumlah_barang }}</td>
                                        <td>{{ $p->tanggal_pinjam }}</td>
                                        <td>{{ $p->tanggal_kembali }}</td>
                                        <td>{{ $p->surat }}</td>
                                        <td>{{ $p->jaminan }}</td>
                                        <td>{{ $p->kondisi }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <a href="{{ url('/peminjaman/' . $p->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>
                                            <form method="POST" action="{{ url('/peminjaman/' . $p->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete()">hapus</button>
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
                    {{ $pj->links() }}
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
@push('custom_js')
    {{-- <script>
  alert('Halaman Home')
</script> --}}

    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin? Data akan dihapus. Apakah Anda ingin melanjutkan?')) {
                document.getElementById('form').submit();
            } else {
                event.preventDefault()
            }
        }
    </script>
@endpush
