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
                    <h3 class="card-title">Tabel Data {{ $title }}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-success" data-toggle="modal"
                            data-target="#create-modal"><i class="fa fa-plus"></i> Tambah
                            Data</button>
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                            data-target="#ekspor-modal"><i class="fa fa-save"></i> Ekspor Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="bg-gradient-secondary text-center">
                                <th width="5%">No.</th>
                                <th>Nama Produk</th>
                                <th> Kategori Produk</th>
                                <th> Tanggal </th>
                                <th> Harga Produk</th>
                                <th width="12%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td><strong>{{ $data->nama_produk }}</strong></td>
                                    <td class="text-center">{{ $data->kategori->nama_kategori }}</td>
                                    <td class="text-center">
                                        @php
                                            $date_diff = \Carbon\Carbon::parse($data->tanggal)->diffForHumans();
                                        @endphp
                                        <span data-toggle="tooltip" data-placement="right"
                                            title="Dibuat {{ $date_diff }}">
                                            {{ $tanggal = \Carbon\Carbon::parse($data->tanggal)->isoFormat('dddd, D MMMM Y') }}
                                        </span>
                                    </td>
                                    <td class="text-center">Rp. {{ number_format($data->harga) }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline-warning btn-sm" title="Hapus"
                                            data-toggle="modal" data-target="#hapus-modal" data-id="{{ $data->id }}"
                                            data-nama-produk="{{ $data->nama_produk }}"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal"
                                            data-id="{{ $data->id }}" data-nama-produk="{{ $data->nama_produk }}"
                                            data-keterangan="{{ $data->keterangan }}" data-harga="{{ $data->harga }}"
                                            data-tanggal="{{ $data->tanggal }}"
                                            data-id-kategori="{{ $data->id_kategori }}" data-target="#edit-modal"
                                            title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal"
                                            data-id="{{ $data->id }}" data-nama-produk="{{ $data->nama_produk }}"
                                            data-tanggal="{{ $tanggal }}" data-tanggal-selisih="{{ $date_diff }}"
                                            data-keterangan="{{ $data->keterangan }}" data-harga="{{ $data->harga }}"
                                            data-kategori="{{ $data->kategori->nama_kategori }}" data-target="#view-modal"
                                            title="Detail"><i class="fa fa-eye"></i></button>
                </div>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('pages.produk.modal')
@endsection()
