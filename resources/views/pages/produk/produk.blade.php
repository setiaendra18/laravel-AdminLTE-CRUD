@extends('template.main')
@section('title', $title)
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('template.include.partials.beadcrumb')
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel {{ $title }}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#create-modal"><i class="fa fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="30%">Nama Produk</th>
                                <th> Kategori Produk</th>
                                <th> Harga Produk</th>
                                <th width="12%">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama_produk }}</td>
                                    <td>{{ $data->id_kategori }}</td>
                                    <td>Rp. {{ number_format($data->harga)}}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-danger btn-sm" title="Hapus"
                                            data-toggle="modal" data-target="#hapus-modal" data-id="{{ $data->id }}"
                                            data-nama-produk="{{ $data->nama_produk }}"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal"
                                            data-id="{{ $data->id }}" data-nama-produk="{{ $data->nama_produk }}"
                                            data-keterangan="{{ $data->keterangan }}" data-target="#edit-modal"
                                            title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
                                            data-id="{{ $data->id }}" data-nama-produk="{{ $data->nama_produk }}"
                                            data-target="#view-modal" title="Detail"><i class="fa fa-eye"></i></button>
                </div>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                sikil
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('pages.produk.modal')
@endsection()
@push('scripts')
    <script>
        $('#edit-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
            // mengambil data dari button 
            var id = button.data('id')
            var keterangan = button.data('keterangan')
            var nama_produk = button.data('nama-produk')
            console.log("id produk : " + id)
            console.log("nama produk : " + nama_produk)
            console.log("keterangan : " + keterangan)
            var modal = $(this)
            modal.find('#nama_produk').val(nama_produk)
            modal.find(' .keterangan').val(keterangan)
            modal.find('#id_produk').val(id)
        })
        $('#edit-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
            // mengambil data dari button 
            var id = button.data('id')
            var keterangan = button.data('keterangan')
            var nama_produk = button.data('nama-produk')
            console.log("id produk : " + id)
            console.log("nama produk : " + nama_produk)
            console.log("keterangan : " + keterangan)
            var modal = $(this)
            modal.find('#nama_produk').val(nama_produk)
            modal.find(' .keterangan').val(keterangan)
            modal.find('#id_produk').val(id)
        })
        $('#view-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
            // mengambil data dari button 
            var id = button.data('id')
            console.log("id produk : " + id)
            var nama_produk = button.data('nama-produk')
            var modal = $(this)
            modal.find('#nama_produk').val(nama_produk)
            modal.find('#id_produk').val(id)
        })
        $('#hapus-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
            // mengambil data dari button 
            var id = button.data('id')
            var modal = $(this)
            modal.find('#id_produk').val(id)
        })
    </script>
@endpush
