<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Dosen;
use Illuminate\Http\Request;

// compact = membuat array
class MahasiswaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        $mahasiswa = Mahasiswa::with('dosen')->get();
        return view('mahasiswa.index',compact('mahasiswa'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        return view('mahasiswa.create',compact('dosen'));
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->id_dosen = $request->id_dosen;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
                ->with(['message'=>'Data mahasiswa berhasil dibuat']);
    }

    public function show($id)
    {
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show',compact('mahasiswa','dosen'));
    }

    public function edit($id)
    {
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit',compact('mahasiswa','dosen'));

    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->id_dosen = $request->id_dosen;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
                ->with(['message'=>'mahasiswa berhasil di edit']);
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('mahasiswa.index')
                ->with(['message'=>'mahasiswa berhasil dihapus']);
    }
}
