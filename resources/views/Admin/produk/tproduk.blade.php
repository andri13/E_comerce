@extends('Admin.master.masteradmin')
@section('content')
<div class="card">
    <div class="card-body">
     <h4 class="header-title">Form tambah produk</h4>
     <form action="{{url('tambahproduk')}}" method="POST" enctype="multipart/form-data">
     @csrf
        <div class="form-group">
            <label  class="col-form-label">Kode Produk</label>
            <input class="form-control" required="required" type="text" name="id_barang">
         </div>
         <div class="form-group">
            <label  class="col-form-label">Nama</label>
            <input class="form-control" required="required" type="text" name="barang" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-control">
                    <option selected>Pilih kategori</option>
                    @foreach($kategori as $row)
                      <option name="id_kategori" value="{{ $row->id }}">{{ $row->kategori }}</option>
                    @endforeach
             </select>
            
                                            
        </div>
        <div class="form-group">
            <label  class="col-form-label">Suplier</label>
            <select name="id_suplier" id="id_suplier" class="form-control">
                    <option selected>Pilih Suplier</option>
                    @foreach($suplier as $row)
                      <option name="id_suplier" value="{{ $row->id }}">{{ $row->suplier }}</option>
                    @endforeach
             </select>                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Harga</label>
            <input class="form-control" required="required" type="text" name="harga" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Diskon</label>
            <input class="form-control" required="required" type="text" name="diskon" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Stok</label>
            <input class="form-control" required="required" type="text" name="stok" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Deskripsi</label>
            <input class="form-control" required="required" type="text" name="deskripsi" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Gambar</label>
            <input class="form-control" required="required" type="file" name="gambar" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Harga Setelah diskon</label>
            <input class="form-control" required="required" type="text" name="harga_diskon" >                                    
        </div>

       

        <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
         </div>     
    </form>             
     </div>
 </div>
@endsection
