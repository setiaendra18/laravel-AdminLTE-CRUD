   <!-- Create Modal -->
   <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Formulir Penambahan Data :
                       <strong>{{ $title }}</strong>
                   </h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form action="{{ route('produk-store') }}" method="post">
                       @csrf
                       <div class="form-group">
                           <label class="form-control-label">Kategori Wisata</label>
                           <select class="form-control" name="id_kategori">
                               <option value="">-- Pilih Kategori {{ $title }} --</option>
                               @foreach ($kategori as $data)
                                   <option value="{{ $data->id }}">
                                       {{ $data->nama_kategori }}
                                   </option>
                               @endforeach
                           </select>
                       </div>
                       <div class="form-group">
                           <label>Tanggal</label>
                           <input type="date" class="form-control"
                               placeholder="Masukan Tanggal Pembelian {{ $title }} .." name="tanggal"
                               id="tanggal">
                       </div>
                       <div class="form-group">
                           <label>Nama produk</label>
                           <input type="text" class="form-control" placeholder="Masukan Nama {{ $title }} .."
                               name="nama_produk">
                       </div>
                       <div class="form-group">
                           <label>Harga produk</label>
                           <input type="number" class="form-control"
                               placeholder="Masukan Harga  {{ $title }} .." name="harga" id="harga">
                       </div>
                       <div class="form-group">
                           <label>Katerangan</label>
                           <textarea class="form-control" name="keterangan" rows="6" id="keterangan"></textarea>
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
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Formulir Perubahan Data :
                       <strong>{{ $title }}</strong>
                   </h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form action="{{ route('produk-update') }}" method="post">
                       @csrf
                       <div class="form-group">
                           <label class="form-control-label">Kategori Wisata</label>
                           <select class="form-control" name="id_kategori" id="kategori">
                               <option value="">-- Pilih Kategori {{ $title }} --</option>
                               @foreach ($kategori as $data)
                                   <option value="{{ $data->id }}">
                                       {{ $data->nama_kategori }}
                                   </option>
                               @endforeach
                           </select>
                       </div>
                       <div class="form-group">
                           <label>Tanggal</label>
                           <input type="date" class="form-control"
                               placeholder="Masukan Tanggal Pembelian {{ $title }} .." name="tanggal"
                               id="tanggal">
                       </div>
                       <div class="form-group">
                           <label>Nama produk</label>
                           <input type="text" class="form-control" placeholder="Masukan Nama {{ $title }} .."
                               name="nama_produk" id="nama_produk">
                       </div>
                       <div class="form-group">
                           <label>Harga produk</label>
                           <input type="number" class="form-control" placeholder="Masukan Nama {{ $title }} .."
                               name="harga" id="harga">
                       </div>
                       <div class="form-group">
                           <label>Katerangan</label>
                           <textarea class="form-control" name="keterangan" rows="6" id="keterangan"></textarea>
                       </div>
               </div>
               <div class="modal-footer">
                   <input type="hidden" name="id_produk" id="id_produk" value="">
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
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <form action="{{ route('produk-hapus') }}" method="post">
                   @csrf
                   <div class="modal-body text-center">
                       <lottie-player src="{{ url('adminlte/img/loader/delete.json') }}" background="transparent"
                           speed="1" style="width: 300px; height: 300px; margin: auto; " loop autoplay>
                       </lottie-player>
                       <h4 class="nama_produk">Apakah anda yakin akan menghapus data ?</h5>
                   </div>
                   <div class="modal-footer">
                       <input type="hidden" name="id_produk" id="id_produk" value="">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                       <button type="submit" class="btn btn-danger">Hapus Data</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- View Modal -->
   <div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog " role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Formulir Perubahan Data :
                       <strong>{{ $title }}</strong>
                   </h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="card-body">
                       <dl class="row">
                           <dt class="col-sm-4">ID PRODUCT</dt>
                           <dd class="col-sm-8" id="id_produk">id</dd>
                           <dt class="col-sm-4">NAMA PRODUK</dt>
                           <dd class="col-sm-8">{!! "<p id='nama_produk'>nama</p>" !!} </dd>
                           <dt class="col-sm-4">Keterangan</dt>
                           <dd class="col-sm-8">{!! "<h3 id='nama_produk'>nama</h3>" !!} </dd>
                       </dl>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
               </div>
               </form>
           </div>
       </div>
   </div>
   <!-- ekspor Modal -->
   <div class="modal fade" id="ekspor-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog " role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Formulir Ekspor Data :
                       <strong>{{ $title }}</strong>
                   </h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="card-body text-center">
                    
                       <a class="btn btn-app bg-secondary" onclick="showData()">
                           <i class="fas fa-barcode"></i> JSON
                       </a>
                       <a class="btn btn-app bg-success">
                           <i class="fas fa-users"></i> Excel
                       </a>
                       <a class="btn btn-app bg-olive">
                           <i class="fas fa-inbox"></i> CSV
                       </a>
                       <a class="btn btn-app bg-danger">
                           <i class="fas fa-envelope"></i> PDF
                       </a>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
               </div>
               </form>
           </div>
       </div>
   </div>
   @push('scripts')
       <script>
            function store() {
                alert('hahahahahh')
            }
           $('#create-modal').on('show.bs.modal', function(event) {
               var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
               // mengambil data dari button 
               var id = button.data('id')
               var keterangan = button.data('keterangan')
               var nama_produk = button.data('nama-produk')
               var modal = $(this)
               modal.find('#nama_produk').val(nama_produk)
               modal.find('#harga').val(harga)
               modal.find(' .keterangan').val(keterangan)
               modal.find('#id_produk').val(id)
           })
           $('#edit-modal').on('show.bs.modal', function(event) {
               var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
               // mengambil data dari button 
               var id = button.data('id')
               var keterangan = button.data('keterangan')
               var nama_produk = button.data('nama-produk')
               var harga = button.data('harga')
               var tanggal = button.data('tanggal')
               var id_kategori = button.data('id-kategori')
               //    console.log("id produk : " + id)
               //    console.log("nama produk : " + nama_produk)
               //    console.log("keterangan : " + keterangan)
               // console.log("ID KATEGORI : " + id_kategori)
               var modal = $(this)
               modal.find('#harga').val(harga)
               modal.find('#nama_produk').val(nama_produk)
               modal.find('#keterangan').val(keterangan)
               modal.find('#id_produk').val(id)
               modal.find('#tanggal').val(tanggal)
               modal.find('#id_kategori').val(id_kategori)
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
