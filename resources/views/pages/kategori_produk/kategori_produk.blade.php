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
                        <button type="button" class="btn btn-outline-success" data-toggle="modal"
                        data-target="#create-modal"><i class="fa fa-plus"></i> Tambah
                        Data</button>
                        
                    </div>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="bg-gradient-secondary text-center">
                                <th width="5%">No.</th>
                                <th width="20%">Nama Produk</th>
                                <th width="11%">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-warning btn-sm" title="Hapus"
                                            data-toggle="modal" data-target="#hapus-modal" data-id="{{ $data->id }}"
                                            data-nama-kategori="{{ $data->nama_kategori }}"><i
                                                class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-outline-info btn-sm"  data-toggle="modal"
                                            data-id="{{ $data->id }}" data-nama-kategori="{{ $data->nama_kategori }}"
                                            data-target="#edit-modal" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-dark btn-sm disabled" title="Detail"><i
                                                class="fa fa-eye"></i></button>
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
    @include('pages.kategori_produk.modal')
@endsection()
