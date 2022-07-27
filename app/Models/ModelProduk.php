<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ModelProduk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "produk";
    protected $fillable = [
        'nama_produk',
        'keterangan',
        'harga',
        'id_kategori',
        'tanggal'
    ];
    public function kategori()
    {
        return $this->belongsTo(ModelKategori::class, 'id_kategori');

}
}
