<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $umkms = Umkm::all();
        return view('umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('umkm.create');
    }

    public function edit(Umkm $umkm)
    {
        return view('umkm.edit', compact('umkm'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaumkm' => 'required',
            'namaproduk' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'berat' => 'required',
            'fotoproduk' => 'required|image',
            'deskripsi' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'tokoonline' => 'required',
            ]);

        $data = $request->all();

        if ($image = $request->file('fotoproduk')) {
            $destinationPath = 'app/public/umkm/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['fotoproduk'] = "$profileImage";
        }
      
        Umkm::create($data);
        return redirect()->route('dashboardumkm')->with('success', 'Produk berhasil di Simpan!');
    }
    
    public function update(Request $request, Umkm $umkm)
    {
        $data = $request->validate([
            'namaumkm' => 'required',
            'namaproduk' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'berat' => 'required',
            'deskripsi' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'tokoonline' => 'required',
            ]);
        
        $umkm->fill($data)->save();
        return redirect()->route('dashboardumkm')->with('success', 'Berhasil edit Produk!');
    }

    public function destroy(Umkm $umkm)
    {
        if(file_exists(public_path('app/public/umkm/'.$umkm->fotoproduk))){
            unlink(public_path('app/public/umkm/'.$umkm->fotoproduk));
        }else{
            return redirect()->back()->with('error', 'Gambar tidak tersedia!');
        }

        $umkm->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus Produk!');
    }
}
