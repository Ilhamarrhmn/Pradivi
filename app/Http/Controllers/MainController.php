<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Emergency;
use App\Models\Umkm;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        return view('index', compact('posts'));
    }

    public function emergency(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'lokasi' => 'required',
            'image' => 'required|image',
            'instansi' => 'required',
            'deskripsi' => 'required',
            ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/emergency/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
      
        Emergency::create($input);
        return redirect()->back()->with('success', 'Data berhasil di Kirim!');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function vAbout()
    {
        return view('profile.about');
    }

    public function vVisiMisi()
    {
        return view('profile.visimisi');
    }

    public function vLayanan()
    {
        return view('layanan');
    }

    public function vUmkm()
    {
        $umkms = Umkm::paginate(15);
        return view('umkm', compact('umkms'));
    }

    public function vDetailUmkm(Umkm $umkm)
    {
        return view('detailumkm', compact('umkm'));
    }

    public function vBerita()
    {
        $posts = Post::paginate(8);
        return view('informasi.berita', compact('posts'));
    }

    public function vGaleri()
    {
        return view('informasi.galeri');
    }
}
