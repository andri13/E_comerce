@extends('Admin.master.masteradmin')
@section('content')
     <div class="col-lg-13 mt-5">
        <div class="card">
           <div class="card-body">
             <h4 class="header-title">Daftar Suplier</h4>
              <a href ="{{ route('tsup') }}" type="button" class="btn btn-flat btn-primary mb-3">+Tambah</a>
                               
            <div class="single-table">
              <div class="table-responsive">
                
              
        <table class="table table-bordered text-center">
                <thead class="text-uppercase">
                     <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Suplier</th>
                        <th scope="col">Suplier</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            </tr>
       	<?php $no=0;?>
	    @foreach($sup as $d)
		<?php $no++;?>
	    	<tr>
                <tbody>
                 <tr>
                    <td>{{$no}}
                    <td>{{ $d->id_suplier }}</td>
                    <td>{{ $d->suplier }}</td>
                    <td>
                    
			            <button>	<a type="submit"  class="ti-pencil-alt" href="{{ route('esup',$d->id) }}" ></a> </button>
		            	<button>	<a type="submit" class="ti-trash" href="{{ route('hsup',$d->id) }}"></a>
				</button>
                </tr>
                                
                @endforeach               
                </tbody>
     
       </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection