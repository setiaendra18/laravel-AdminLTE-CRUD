<?php
namespace App\Http\Controllers;
use App\Models\ModelKategori;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
class KategoriProdukController extends Controller
{
    public function __construct()
    {
        //global variabel untuk setting untuk judul halaman
        $this->title = "Kategori Produk";
    }
    public function index()
    {
        $kategori = ModelKategori::all();
        return view(
            "pages.kategori_produk.kategori_produk",
            [
            "title" => $this->title, 
            "kategori" => $kategori,
            ]
        );
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
         //validasi input user, error akan di kembalikan ke view
        $this->validate($request, [
            'nama_kategori' => 'required|string|min:3|max:25',
        ]);
        
         //ekekusi input user, error akan di handle oleh SQL Exception
        try {
            ModelKategori::create([
                'nama_kategori' => $request->nama_kategori,
            ]);
            return redirect()
                ->route('kategori-produk')
                ->with(['success' => ' ']);
        } catch (QueryException $error_query) {
            return redirect()
                ->back()
                ->withInput()
                ->with(['error' => $error_query->getMessage()]);
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request)
    {
        //validasi input user, error akan di kembalikan ke view
        $this->validate($request, [
            'nama_kategori' => 'required|string|min:3|max:25',
        ]);

        //cari data pada database dengan id yang sesuai request user
        $kategori = ModelKategori::findOrFail($request->id_kategori);

        //ekekusi input user, error akan di handle oleh SQL Exception
        try {
            $kategori->update([
                'nama_kategori' => $request->nama_kategori,
            ]);
            return redirect()
                ->route('kategori-produk')
                ->with(['info' => ' ']);
        } catch (QueryException $error_query) {
            return redirect()
                ->back()
                ->withInput()
                ->with(['error' => $error_query->getMessage()]);
        }
    }
    public function destroy(Request $request)
    {
        $kategori = ModelKategori::findOrFail($request->id_kategori);
        try {
            $kategori->delete();
            return redirect()
                ->route('kategori-produk')
                ->with(['warning' => ' ']);
        } catch (QueryException $error_query) {
            return redirect()
                ->back()
                ->withInput()
                ->with(['error' => $error_query->getMessage()]);
        }
    }
}
