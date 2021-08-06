<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\suplier;


class suplierController extends Controller
{


    public function index()
    {
        $sup = DB::table('suplier')->get();
 
    	// mengirim data pegawai ke view index
		return view('Admin/produk/suplier',['sup' => $sup]);         
    }


    public function create()
    {
        //
        $data=DB::table('suplier')->get();
        return view('Admin/produk/tsuplier',compact('data'));
    }


    public function insert(Request $request)
    {
        //
        $this->validate($request,[
            'suplier'=>'required',
            'id_suplier'=>'required',
        ]);
        $data=suplier::create([
            'id_suplier' => $request->id_suplier,
			'suplier' => $request->suplier
        ]);
        return redirect()->route('sup')->with('success', 'Data Added successfully.');
    }

   
    public function edit($id)
	{
		
		$suplier = DB::table('suplier')->where('id',$id)->get();
	
		return view('Admin/produk/esuplier',['suplier' => $suplier]);
 
    }
  
    public function update(Request $request)
    {
        DB::table('suplier')->where('id',$request->id)->update([
            'id_suplier'       =>   $request->id_suplier,
            'suplier'        =>   $request->suplier,
        ]);
            
        return redirect()->route('sup')->with('success', 'Data is successfully updated');
    }
    
    public function hapus($id)
	{
		DB::table('suplier')->where('id',$id)->delete();
		
		
		return redirect()->route('sup');
    }


}
