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
                               <option value="">-- Pilih Kategori {{$title}} --</option>
                               @foreach ($kategori as $data)
                                   <option value="{{ $data->id }}">
                                       {{ $data->nama_kategori }}
                                   </option>
                               @endforeach
                           </select>
                       </div>
                       <div class="form-group">
                           <label>Nama produk</label>
                           <input type="text" class="form-control" placeholder="Masukan Nama {{ $title }} .."
                               name="nama_produk">
                       </div>
                       <div class="form-group">
                           <label>Harga produk</label>
                           <input type="number" class="form-control" placeholder="Masukan Harga  {{ $title }} .."
                               name="harga" id="harga">
                       </div>
                           <div class="form-group">
                               <label>Katerangan</label>
                               <textarea class="form-control" name="keterangan" rows="6" id="summernote"></textarea>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                           <button type="submit" class="btn btn-primary">Simpan</button>
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
                               <select class="form-control" name="id_kategori">
                                   <option value="">-- Pilih Kategori Produk --</option>
                                   @foreach ($kategori as $data)
                                       <option value="{{ $data->id }}" {{ $data->id == 20 ? 'selected' : '' }}>
                                           {{ $data->nama_kategori }}
                                       </option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group">
                               <label>Nama produk</label>
                               <input type="text" class="form-control"
                                   placeholder="Masukan Nama {{ $title }} .." name="nama_produk"
                                   id="nama_produk">
                           </div>
                           <div class="form-group">
                               <label>Harga produk</label>
                               <input type="number" class="form-control"
                                   placeholder="Masukan Nama {{ $title }} .." name="harga" id="harga">
                           </div>
                           <div class="form-group">
                               <label>Katerangan</label>
                               <textarea class="form-control keterangan" name="keterangan" rows="6" id="summernote"></textarea>
                           </div>
                   </div>
                   <div class="modal-footer">
                       <input type="hidden" name="id_produk" id="id_produk" value="">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                       <button type="submit" class="btn btn-info">Simpan Perubahan</button>
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
