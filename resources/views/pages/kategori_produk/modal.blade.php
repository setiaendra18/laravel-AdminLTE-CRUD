    <!-- Create Modal -->
    <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header bg-gradient-success">
                    <h5 class="modal-title" id="exampleModalLabel">Formulir Penambahan Data :
                        <strong>{{ $title }}</strong>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kategori-store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama {{ $title }} .."
                                name="nama_kategori">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-success" id="simpan"><i class="fa fa-save"></i>
                        Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gradient-info">
                    <h5 class="modal-title" id="exampleModalLabel">Formulir Perubahan Data :
                        <strong>{{ $title }}</strong>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kategori-update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama {{ $title }} .."
                                name="nama_kategori" id="nama_kategori">
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_kategori" id="id_kategori" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan Perubahan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="hapus-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <form action="{{ route('kategori-hapus') }}" method="post">
                    @csrf
                    <div class="modal-body text-center">
                        <lottie-player src="{{ url('adminlte/img/animasi/delete.json') }}" background="transparent"
                            speed="1" style="width: 300px; height: 300px; margin: auto; " loop autoplay>
                        </lottie-player>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h5><strong><span id="nama_kategori"></span></strong></h5>
                            <h6>Apakah anda yakin akan menghapus data tersebut ?</h6>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_kategori" id="id_kategori" value="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $('#edit-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
            // mengambil data dari button 
            var id = button.data('id')
            console.log("id produk : " + id)
            var nama_kategori = button.data('nama-kategori')
            var modal = $(this)
            modal.find('#nama_kategori').val(nama_kategori)
            modal.find('#id_kategori').val(id)
        })
        $('#hapus-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
            // mengambil data dari button 
            var nama_kategori = button.data('nama-kategori')
            var id = button.data('id')
            var modal = $(this)
            modal.find('#id_kategori').val(id)
            modal.find('#nama_kategori').text(nama_kategori)
        })
    </script>
@endpush
