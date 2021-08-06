@extends('Admin.master.masteradmin')
@section('content')
<div class="card">
    <div class="card-body">
     <h4 class="header-title">Form Edit Suplier</h4>
     @foreach($suplier as $d)
     <form action="{{route('usup')}}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{ $d->id }}"> <br/>
        <div class="form-group">
            <label  class="col-form-label">Kode Suplier</label>
            <input class="form-control" required="required" type="text" name="id_suplier" value="{{ $d->id_suplier }}">
         </div>
         <div class="form-group">
            <label  class="col-form-label">Suplier</label>
            <input class="form-control" required="required" type="text" name="suplier" value="{{ $d->suplier }}">                                    
        </div>
        <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
         </div>     
    </form> 
    @endforeach            
     </div>
 </div>
@endsection
