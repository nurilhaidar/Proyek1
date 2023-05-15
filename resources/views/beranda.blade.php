@extends('layout.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Beranda Page</li>
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
                    <h3 class="card-title">Home</h3>

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
                    <h2>Selamat Datang</h2>
                    <p>
                        Website ini berfungsi untuk menampung informasi data berikut:<br>
                        1. Informasi Data Barang dan Inventaris Himpunan Mahasiswa Teknologi Informasi<br>
                        2. Informasi Data Peminjam Barang dan Inventaris Himpunan Mahasiswa Teknologi Informasi<br>
                        3. Informasi Peminjaman Barang dan Inventaris Himpunan Mahasiswa Teknologi Informasi<br>

                        Dengan adanya website ini, mempermudah dalam proses penambahan, update, dan edit data barang dan
                        inventaris yang ada di
                        Himpunan Mahasiswa Teknologi Informasi
                    </p>

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
    <script>
        alert('Selamat Datang')
    </script>
@endpush
