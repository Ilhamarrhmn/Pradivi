<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Emergency;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function uploadImage(Request $request) 
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('app/public/berita/'), $fileName);
    
            $url = asset('app/public/berita/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = [  "title"  =>  $request->title,
                    "gambar"  =>  $request->gambar,
                    "author" => $request->author,
                    "body"  =>  $request->body,
                    "slug"  =>  Str::slug($request->title)
                ];


        $post['gambar'] = $request->gambar->storeAs(
            'berita/highlight',
            \date('YmdHis') . '.' . $request->gambar->getClientOriginalExtension(),
            'public',
        );
       
        $post  =  Post::create($post);
        return redirect()->route('dashboard')->with('success', 'Berhasil post Artikel!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
            ]);

        $post->fill($data)->save();
        return redirect()->route('dashboard')->with('success', 'Berhasil edit Artikel!');
    }

    public function destroy(Post $post)
    {
        if(file_exists(public_path('/app/public/'.$post->gambar))){
            unlink(public_path('/app/public/'.$post->gambar));
        }else{
            return redirect()->back()->with('error', 'Gambar tidak tersedia!');
        }

        $post->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus Artikel!');
    }

    public function vDamkar()
    {
        $emergency1 = Emergency::where('instansi', 'damkar')->get();
        return view('posts.damkar', compact('emergency1'));
    }

    public function vBpbd()
    {
        $emergency2 = Emergency::where('instansi', 'bpbd')->get();
        return view('posts.bpbd', compact('emergency2'));
    }

    public function vRsud()
    {
        $emergency3 = Emergency::where('instansi', 'rsud')->get();
        return view('posts.rsud', compact('emergency3'));
    }

    public function destroyEmergency(Emergency $emergency)
    {
        $emergency->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
