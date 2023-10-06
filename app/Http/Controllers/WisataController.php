<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $wisatas = Wisata::all();
        return view('wisata.index', compact('wisatas'));
    }

    public function create()
    {
        return view('wisata.create');
    }

    public function edit(Wisata $wisata)
    {
        return view('wisata.edit', compact('wisata'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namatempat' => 'required',
            'deskripsi' => 'required',
            'titiklokasi' => 'required',
            'gambar' => 'required|image',
            ]);

        $data = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'app/public/wisata/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['gambar'] = "$profileImage";
        }
      
        Wisata::create($data);
        return redirect()->route('dashboardwisata')->with('success', 'Produk berhasil di Simpan!');
    }
    
    public function update(Request $request, Wisata $wisata)
    {
        $data = $request->validate([
            'namatempat' => 'required',
            'deskripsi' => 'required',
            'titiklokasi' => 'required',
            ]);
        
        $wisata->fill($data)->save();
        return redirect()->route('dashboardwisata')->with('success', 'Berhasil edit Produk!');
    }

    public function destroy(Wisata $wisata)
    {
        if(file_exists(public_path('app/public/wisata/'.$wisata->gambar))){
            unlink(public_path('app/public/wisata/'.$wisata->gambar));
        }else{
            return redirect()->back()->with('error', 'Gambar tidak tersedia!');
        }

        $wisata->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus Produk!');
    }
}
