@extends('template.main')
@section('title', $title)
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('template.partials.beadcrumb')
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel {{ $title }}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah
                            Data</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                </td>
                            </tr>

                        </tbody>

                    </table>
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
    <!-- /.content-wrapper -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulir Penambahan Data {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
