<?php
namespace App\Http\Controllers;
use App\Models\ModelKategori;
use App\Models\ModelProduk;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
class ProdukController extends Controller
{
    public function __construct()
    {
        //global variabel untuk setting untuk judul halaman
        $this->title = "Produk";
    }
    public function index()
    {
        $produk = ModelProduk::all();
        $kategori = ModelKategori::all();
        return view(
            "pages.produk.produk",
            [
                "title" => $this->title,
                "kategori" => $kategori,
                "produk" => $produk,
            ]
        );
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //validasi input user, error akan di kembalikan ke view
        $this->validate($request, [
            'nama_produk' => 'required|string|min:5|max:30',
            'id_kategori' => 'required',
            'keterangan' => 'required|string|min:10|max:150',
            'harga' => 'required',
        ]);
        //ekekusi input user, error akan di handle oleh SQL Exception
        try {
            ModelProduk::create([
                'nama_produk' => $request->nama_produk,
                'keterangan' => $request->keterangan,
                'id_kategori' => $request->id_kategori,
                'harga' => $request->harga,
            ]);
            return redirect()
                ->route('produk')
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
            'nama_produk' => 'required|string|min:5|max:30',
            'id_kategori' => 'required',
            'keterangan' => 'required|string|min:10|max:150',
            'harga' => 'required',
        ]);
         //cari data pada database dengan id yang sesuai request user
        $produk = ModelProduk::findOrFail($request->id_produk);
         //ekekusi input user, error akan di handle oleh SQL Exception
        try {
            $produk->update([
                'nama_produk' => $request->nama_produk,
                'keterangan' => $request->keterangan,
                'id_kategori' => $request->id_kategori,
                'harga' => $request->harga,
            ]);
            return redirect()
                ->route('produk')
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
        $produk = ModelProduk::findOrFail($request->id_produk);
        try {
            $produk->delete();
            return redirect()
                ->route('produk')
                ->with(['warning' => ' ']);
        } catch (QueryException $error_query) {
            return redirect()
                ->back()
                ->withInput()
                ->with(['error' => $error_query->getMessage()]);
        }
    }
}
