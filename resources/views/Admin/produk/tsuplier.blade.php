@extends('Admin.master.masteradmin')
@section('content')
<div class="card">
    <div class="card-body">
     <h4 class="header-title">Form tambah Suplier</h4>
     <form action="{{url('tambahsuplier')}}" method="POST">
     @csrf
        <div class="form-group">
            <label  class="col-form-label">Kode Kategori</label>
            <input class="form-control" required="required" type="text" name="id_suplier">
         </div>
         <div class="form-group">
            <label  class="col-form-label">Kategori</label>
            <input class="form-control" required="required" type="text" name="suplier" >                                    
        </div>
        <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
         </div>     
    </form>             
     </div>
 </div>
@endsection
