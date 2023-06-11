@extends('admin.layout.template')
@section('content')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Riwayat Peminjaman</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{ url('barang/create') }}" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peminjam</th>
                                    <th>OKI</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data->count() > 0)
                                    @foreach ($data as $p)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->nama_peminjam }}</td>
                                            <td>{{ $p->asal_oki }}</td>
                                            <td>{{ date('d-m-Y', strtotime($p->tanggal_pinjam)) }}</td>
                                            <td>{{ date('d-m-Y', strtotime($p->tanggal_kembali)) }}</td>
                                            <td>{{ $p->status->status }}</td>
                                            <td>
                                                <div style="display: flex">
                                                    {{-- show --}}
                                                    <a href="{{ url('/peminjaman/' . $p->id) }}"
                                                        class="btn btn-sm btn-primary" style="margin-right: 5px"><i
                                                            class="fas fa-fw fa-eye"></i></a>
                                                    {{-- delete --}}
                                                    <form method="POST" action="{{ url('/peminjaman/' . $p->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="confirmDelete()">
                                                            <i class="fas fa-fw fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
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
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Data</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" name="id" class="form-control" id="id" disabled>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="id">Nama</label>
                                <input type="text" name="nama_peminjam" class="form-control" id="nama" disabled>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="id">OKI</label>
                                <input type="text" name="asal_oki" class="form-control" id="oki" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="id">Tanggal Pinjam</label>
                                <input type="text" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="id">Tanggal Kembali</label>
                                <input type="text" name="tanggal_kembali" class="form-control" id="tanggal_kembali"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="id">Surat</label>
                                <input type="text" name="surat" class="form-control" id="surat" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="id">Jaminan</label>
                                <input type="text" name="jaminan" class="form-control" id="jaminan" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id">Barang</label>
                                <div id="barang-input">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
    {{-- <script>
        $(document).ready(function() {
            $('#show-button').on('click', function() {
                $.ajax({
                    url: 'peminjaman/' + $(this).data('id'),
                    type: 'GET',
                    success: function(data) {
                        $('#id').val(data.id);
                        $('#nama').val(data.nama_peminjam);
                        $('#oki').val(data.asal_oki);
                        $('#tanggal_pinjam').val(data.tanggal_pinjam);
                        $('#tanggal_kembali').val(data.tanggal_kembali);
                        $('#jaminan').val(data.jaminan);
                        $('#surat').val(data.surat);
                    },
                    error: function() {
                        console.log('error');
                    }
                });

                $('#modal').modal('show');
            });
        });
    </script> --}}
@endpush
