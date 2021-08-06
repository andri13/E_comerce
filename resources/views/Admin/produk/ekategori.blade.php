@extends('Admin.master.masteradmin')
@section('content')
<div class="card">
    <div class="card-body">
     <h4 class="header-title">Form Edit kategori</h4>
     @foreach($kategori as $d)
     <form action="{{route('uktg')}}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{ $d->id }}"> <br/>
        <div class="form-group">
            <label  class="col-form-label">Kode Kategori</label>
            <input class="form-control" required="required" type="text" name="id_kategori" value="{{ $d->id_kategori }}">
         </div>
         <div class="form-group">
            <label  class="col-form-label">Kategori</label>
            <input class="form-control" required="required" type="text" name="kategori" value="{{ $d->kategori }}">                                    
        </div>
        <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
         </div>     
    </form> 
    @endforeach            
     </div>
 </div>
@endsection
