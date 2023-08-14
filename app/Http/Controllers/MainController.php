<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Emergency;
use App\Models\Umkm;
use App\Stats\ViewStats;

class MainController extends Controller
{
    public function index()
    {
        $stats = ViewStats::query()->start(now()->startOfYear())->end(now()->endOfYear())->groupByYear()->get()->first();
        ViewStats::increase();

        $posts = Post::paginate(3);
        return view('index', compact('posts','stats'));
    }

    public function emergency(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'instansi' => 'required',
            ]);

        $emergency = $request->all();
      
        Emergency::create($emergency);
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
    
    public function vSejarah()
    {
        return view('profile.sejarah');
    }

    public function vWilayah()
    {
        return view('profile.wilayah');
    }
    
    public function vStruktur()
    {
        return view('pemerintahan.struktur');
    }
    
    public function vPerangkat()
    {
        return view('pemerintahan.perangkat');
    }

    public function vLembaga()
    {
        return view('pemerintahan.lembaga');
    }

    public function vUmkm()
    {
        $umkm = Umkm::paginate(15);
        return view('umkm.umkm', compact('umkm'));
    }

    public function vDetailUmkm(Umkm $umkm)
    {
        return view('umkm.detailumkm', compact('umkm'));
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
