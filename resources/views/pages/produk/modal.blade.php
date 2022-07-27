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
                   <form action="{{ route('produk-store') }}" method="post">
                       @csrf
                       <div class="form-group">
                           <label class="form-control-label">Kategori Wisata</label>
                           <select class="form-control select2" name="id_kategori">
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
               <div class="modal-header bg-gradient-info">
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
                           <select class="form-control select2" name="id_kategori" id="kategori">
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
                               id="tanggal" >
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
                       <lottie-player src="{{ url('adminlte/img/animasi/delete.json') }}" background="transparent"
                           speed="1" style="width: 300px; height: 300px; margin: auto; " loop autoplay>
                       </lottie-player>
                       <div class="alert alert-warning alert-dismissible fade show" role="alert">
                           <h5><strong><span id="nama_produk"></span></strong></h5>
                           <h6>Apakah anda yakin akan menghapus data tersebut ?</h6>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <input type="hidden" name="id_produk" id="id_produk" value="">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                       <button type="submit" class="btn btn-warning">Ya , Hapus Data</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- View Modal -->
   <div class="modal fade " id="view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog  modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header bg-gradient-dark">
                   <h5 class="modal-title" id="exampleModalLabel">
                       <strong>Data Detail {{ $title }} : <span id="nama_produk"></span></strong>
                   </h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="card-body">
                       <dl class="row">
                        <table class="table table-light table-striped">
                            <thead>
                            <tbody>
                              <tr>
                                <th >KODE PRODUK</th>
                                <td>:</td>
                                <td><span id="id_produk"></span></td>
                              </tr>
                              <tr>
                                <th>TANGGAL INPUT</th>
                                <td >:</td>
                                <td><span id="tanggal"></span> ( <span id="tanggal_selisih"></span> )</td>
                              </tr>
                              <tr>
                                <th>KATEGORI PRODUK</th>
                                <td >:</td>
                                <td><span id="kategori"></span></td>
                              </tr>
                              <tr>
                                <th>NAMA PRODUK</th>
                                <td >:</td>
                                <td><span id="nama_produk"></span></td>
                              </tr>
                              <tr>
                                <th>HARGA</th>
                                <td >:</td>
                                <td>Rp. <span id="harga"></span></td>
                              </tr>
                              <tr>
                                <th>KETERANGAN</th>
                                <td >:</td>
                                <td><span id="keterangan"></span></td>
                              </tr>
                            </tbody>
                          </table>
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
               <div class="modal-header bg-gradient-primary">
                   <h5 class="modal-title" id="exampleModalLabel">Formulir Ekspor Data :
                       <strong>{{ $title }}</strong>
                   </h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="card-body text-center">
                       <a class="btn btn-app bg-secondary" onclick="alertModal()">
                           <i class="fas fa-file"></i> JSON
                       </a>
                       <a class="btn btn-app bg-success">
                           <i class="fas fa-file-excel"></i> Excel
                       </a>
                       <a class="btn btn-app bg-olive">
                           <i class="fas fa-file-csv"></i> CSV
                       </a>
                       <a class="btn btn-app bg-danger">
                           <i class="fas fa-file-pdf"></i> PDF
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
           function alertModal() {
               alert('masih pengembangan')
           }
           $('#create-modal').on('show.bs.modal', function(event) {
               var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
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
               var tanggal = button.data('tanggal')
               var tanggal_selisih = button.data('tanggal-selisih')
               var harga = button.data('harga')
               var keterangan = button.data('keterangan')
               var kategori = button.data('kategori')
               console.log("id produk : " + id)
               console.log("tanggal : " + tanggal_selisih)
               var nama_produk = button.data('nama-produk')
               var modal = $(this)
               modal.find('#nama_produk').text(nama_produk)
               modal.find('#harga').text(harga)
               modal.find('#keterangan').text(keterangan)
               modal.find('#id_produk').text(id)
               modal.find('#tanggal').text(tanggal)
               modal.find('#kategori').text(kategori)
               modal.find('#tanggal_selisih').text(tanggal_selisih)
           })
           $('#hapus-modal').on('show.bs.modal', function(event) {
               var button = $(event.relatedTarget) // Mencari button sebagai trigger untuk melempar data
               // mengambil data dari button 
               var id = button.data('id')
               var nama_produk = button.data('nama-produk')
               console.log("nama produk : " + nama_produk)
               var modal = $(this)
               modal.find('#id_produk').val(id)
               modal.find('#nama_produk').text(nama_produk)
           })
       </script>
   @endpush
