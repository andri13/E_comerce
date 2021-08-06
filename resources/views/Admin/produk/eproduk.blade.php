@extends('Admin.master.masteradmin')
@section('content')
<div class="card">
    <div class="card-body">
     <h4 class="header-title">Form Edit Produk</h4>
     @foreach($produk as $d)
     <form action="{{route('upro')}}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{ $d->id }}"> <br/>
        
        <div class="form-group">
            <label  class="col-form-label">Kode Produk</label>
            <input class="form-control" required="required" type="text" name="id_barang" value="{{ $d->id_barang }}">
         </div>
         <div class="form-group">
            <label  class="col-form-label">Nama</label>
            <input class="form-control" required="required" type="text" name="barang" value="{{ $d->barang }}" >                                    
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
            <input class="form-control" required="required" type="text" name="harga" value="{{ $d->harga }}">                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Diskon</label>
            <input class="form-control" required="required" type="text" name="diskon" value="{{ $d->diskon }}" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Stok</label>
            <input class="form-control" required="required" type="text" name="stok" value="{{ $d->stok }}" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Deskripsi</label>
            <input class="form-control" required="required" type="text" name="deskripsi" value="{{ $d->deskripsi }}">                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Gambar</label>
            <input class="form-control" required="required" type="file" name="gambar" >                                    
        </div>
        <div class="form-group">
            <label  class="col-form-label">Harga Setelah diskon</label>
            <input class="form-control" required="required" type="text" name="harga_diskon" value="{{$d->harga_diskon}}" >                                    
        </div>
        <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
         </div>     
    </form> 
    @endforeach            
     </div>
 </div>
@endsection
