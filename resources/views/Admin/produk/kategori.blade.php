@extends('Admin.master.masteradmin')
@section('content')
     <div class="col-lg-13 mt-5">
        <div class="card">
           <div class="card-body">
             <h4 class="header-title">Daftar Produk</h4>
              <a href ="{{ route('tktg') }}" type="button" class="btn btn-flat btn-primary mb-3">+Tambah</a>
                               
            <div class="single-table">
              <div class="table-responsive">
                
              
        <table class="table table-bordered text-center">
                <thead class="text-uppercase">
                     <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Kategori</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            </tr>
       	<?php $no=0;?>
	    @foreach($ktg as $d)
		<?php $no++;?>
	    	<tr>
                <tbody>
                 <tr>
                    <td>{{$no}}
                    <td>{{ $d->id_kategori }}</td>
                    <td>{{ $d->kategori }}</td>
                    <td>
                    
			            <button>	<a type="submit"  class="ti-pencil-alt" href="{{ route('ektg',$d->id) }}" ></a> </button>
		            	<button>	<a type="submit" class="ti-trash" href="{{ route('hktg',$d->id) }}"></a>
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