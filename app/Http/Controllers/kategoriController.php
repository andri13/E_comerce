<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\kategori;


class kategoriController extends Controller
{


    public function index()
    {
        $ktg = DB::table('kategori')->get();
 
    	// mengirim data pegawai ke view index
		return view('Admin/produk/kategori',['ktg' => $ktg]);         
    }


    public function create()
    {
        //
        $data=DB::table('kategori')->get();
        return view('Admin/produk/tkategori',compact('data'));
    }


    public function insert(Request $request)
    {
        //
        $this->validate($request,[
            'kategori'=>'required',
            'id_kategori'=>'required',
        ]);
        $data=kategori::create([
            'id_kategori' => $request->id_kategori,
			'kategori' => $request->kategori
        ]);
        return redirect()->route('ktg')->with('success', 'Data Added successfully.');
    }

   
    public function edit($id)
	{
		
		$kategori = DB::table('kategori')->where('id',$id)->get();
	
		return view('Admin/produk/ekategori',['kategori' => $kategori]);
 
    }
  
    public function update(Request $request)
    {
        DB::table('kategori')->where('id',$request->id)->update([
            'id_kategori'       =>   $request->id_kategori,
            'kategori'        =>   $request->kategori,
        ]);
            
        return redirect()->route('ktg')->with('success', 'Data is successfully updated');
    }
    
    public function hapus($id)
	{
		DB::table('kategori')->where('id',$id)->delete();
		
		
		return redirect()->route('ktg');
    }


}
