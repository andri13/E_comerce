<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table='barang';
    protected $fillable =['id_barang','barang','id_kategori','id_suplier','harga','diskon','stok','harga','harga_diskon','deskripsi','gambar'];
    public function getkategori(){
        return $this->belongsTo('App\kategori', 'id_kategori', 'id');
    }
    public function getsuplier(){
        return $this->belongsTo('App\suplier', 'id_suplier', 'id');
    }

}