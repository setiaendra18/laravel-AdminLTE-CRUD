<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Halaman {{ $title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Beranda</li>
                    <li class="breadcrumb-item">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- alert -->
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            

            
            <div id="flash-message">
                @if (request()->is('/'))
                @else
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data <strong>{{ $title }} </strong> anda telah berhasil ditambahkan ke sistem.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('info'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            Data <strong>{{ $title }} </strong> anda telah berhasil dirubah.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Data <strong>{{ $title }} </strong> anda telah berhasil dihapus.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Maaf :( pemrosesan data <strong>{{ $title }} </strong> anda gagal.
                            <ol>
                                <li>Data yang saling berelasi tidak dapat dihapus.</li>
                                <li>Kesalahan pada ekekusi kueri sistem.</li>
                            </ol>
                            {{-- <i>{{ session('error') }}</i> --}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    {{-- form validasi alert --}}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
                            <h6>Kesalahan input pada data <strong>{{ $title }} </strong>, data yang
                                masukan
                                tidak sesuai, kolom yang tidak sesuai adalah sebagai berikut :</h6>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    @endif
                    {{-- akhir form validasi alert --}}
                @endif
            </div>
        </div>
    </div>
</div>
