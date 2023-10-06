<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $agendas = Agenda::all();
        return view('agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function edit(Agenda $agenda)
    {
        return view('agenda.edit', compact('agenda'));
    }

    public function store(Request $request)
    {
        $data = [  "namaacara"  =>  $request->namaacara,
                    "jenisacara" => $request->jenisacara,
                    "tglmulai"  =>  $request->tglmulai,
                    "tglselesai"  =>  $request->tglselesai,
                    "tempat"  =>  $request->tempat,
                    "pelaksana"  =>  $request->pelaksana,
                    "foto"  =>  $request->foto,
                ];

        if ($image = $request->file('foto')) {
            $destinationPath = 'app/public/agenda/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['foto'] = "$profileImage";
        }
       
        $data  =  Agenda::create($data);
        return redirect()->route('dashboardagenda')->with('success', 'Berhasil mengatur Agenda!');
    }

    public function update(Request $request, Agenda $agenda)
    {
        $data = $request->validate([
            'namaacara' => 'required',
            'jenisacara' => 'required',
            'tglmulai' => 'required',
            'tglselesai' => 'required',
            'tempat' => 'required',
            'pelaksana' => 'required',
            ]);
        
        $agenda->fill($data)->save();
        return redirect()->route('dashboardagenda')->with('success', 'Berhasil edit Agenda!');
    }

    public function destroy(Agenda $agenda)
    {
        if(file_exists(public_path('app/public/agenda/'.$agenda->foto))){
            unlink(public_path('app/public/agenda/'.$agenda->foto));
        }else{
            return redirect()->back()->with('error', 'Gambar tidak tersedia!');
        }

        $agenda->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus Agenda!');
    }
}
