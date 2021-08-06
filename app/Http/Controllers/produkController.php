<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\produk;


class produkController extends Controller
{


    public function index()
    {
        $pro = DB::table('barang')->get();
 
    	// mengirim data pegawai ke view index
		return view('Admin/produk/produk',['pro' => $pro]);         
    }


    public function create()
    {
        //
        $kategori=DB::table('kategori')->get();
        $suplier=DB::table('suplier')->get();
        $data=DB::table('barang')->get();
        return view('Admin/produk/tproduk',compact('data','kategori','suplier'));
    }


    public function insert(Request $request)
    {
        //
        $this->validate($request,[
            'id_barang'=>'required',
            'barang'=>'required',
            'id_kategori'=>'required',
            'id_suplier'=>'required',
            'diskon'=>'required',
            'stok'=>'required',
            'harga'=>'required',
            'harga_diskon'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required'
        ]);
        $file = $request->file('gambar');

        $nama_file = time()."_".$file->getClientOriginalName();
    
                  // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'gbr';
        $file->move($tujuan_upload,$nama_file);

        $data=produk::create([
            'id_barang'=> $request->id_barang,
            'barang'=>  $request->barang,
            'id_kategori'=> $request->id_kategori,
            'id_suplier'=> $request->id_suplier,
            'diskon'=> $request->diskon,
            'stok'=> $request->stok,
            'harga'=> $request->harga,
            'harga_diskon'=> $request->harga_diskon,
            'deskripsi'=> $request->deskripsi,
            'gambar'=>$nama_file,
            
        ]);
        return redirect()->route('pro')->with('success', 'Data Added successfully.');
    }

   
    public function edit($id)
	{
		
		$produk = DB::table('barang')->where('id',$id)->get();
	
        $suplier=DB::table('suplier')->get();
        $kategori=DB::table('kategori')->get();
        return view('Admin/produk/eproduk',compact('produk','kategori','suplier'));
 
    }
  
    public function update(Request $request)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('gambar');
        if($image != '')
        {
            $request->validate([
                'id_barang'=>'required',
                'barang'=>'required',
                'id_kategori'=>'required',
                'id_suplier'=>'required',
                'diskon'=>'required',
                'stok'=>'required',
                'harga'=>'required',
                'harga_diskon'=>'required',
                'deskripsi'=>'required',
                'gambar'=>'required'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gbr'), $image_name);
        }
        else
        {
            $request->validate([
                'id_barang'=>'required',
                'barang'=>'required',
                'id_kategori'=>'required',
                'id_suplier'=>'required',
                'diskon'=>'required',
                'stok'=>'required',
                'harga'=>'required',
                'harga_diskon'=>'required',
                'deskripsi'=>'required'
            ]);
        }

        $form_data = array(
            'id_barang'=> $request->id_barang,
            'barang'=>  $request->barang,
            'id_kategori'=> $request->id_kategori,
            'id_suplier'=> $request->id_suplier,
            'diskon'=> $request->diskon,
            'stok'=> $request->stok,
            'harga'=> $request->harga,
            'harga_diskon'=> $request->harga_diskon,
            'deskripsi'=> $request->deskripsi,
            'gambar'=>$image_name,
        );
  
        DB::table('barang')->where('id',$request->id)->update($form_data);

        return redirect()->route('pro')->with('success', 'Data is successfully updated');
    }
    
    public function hapus($id)
	{
		DB::table('barang')->where('id',$id)->delete();
		
		
		return redirect()->route('pro');
    }


}
