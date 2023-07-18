<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::all();
        return view('umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaproduk' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'berat' => 'required',
            'fotoproduk' => 'required|image',
            'deskripsi' => 'required',
            'whatsapp' => 'required',
            'facebook' => '',
            'instagram' => '',
            'tokoonline' => '',
            ]);

        $input = $request->all();

        if ($image = $request->file('fotoproduk')) {
            $destinationPath = 'images/umkm/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['fotoproduk'] = "$profileImage";
        }
      
        Umkm::create($input);
        return redirect()->route('dashboardumkm')->with('success', 'Data berhasil di Simpan!');
    }
}
