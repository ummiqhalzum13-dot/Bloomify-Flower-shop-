<?php

namespace App\Http\Controllers;

use App\Models\Bloomify;
use Illuminate\Http\Request;

class BloomifyController extends Controller
{
    public function index() {
        $Bungas = Bloomify::all();
        return view('Bloomify.index', compact('Bungas'));
    }

    public function about(){
        return view ("Bloomify.about");
    }

    public function create(){
        return view('Bloomify.create');
    }

    public function store(Request $request){
        $Bungas = $request->validate([
            'nama_bunga' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required',
            'kategori' => 'required',
        ]);

        Bloomify::create($dataBunga);
        return redirect()->route('Blomifyt-list')->with('success', 'Data mahasiswa berhasil ditambah');
    }

    public function show(String $id){
        $Bunga = Bloomify::findOrFail($id);
        return view('Bloomify.show', compact('Bunga'));
    }

     public function edit(String $id){
        $Bunga = \App\Models\Bloomify::findOrFail($id);
        return view('Bloomify.edit', compact('Bunga'));
    }

    public function update(Request $request, Student $Student){
        $data = $request->validate([
            'nama_bunga' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required',
            'kategori' => 'required',
        ]);

        $Bunga->update($data);

        return redirect()->route('Bloomify.index')->with('success', 'Data bunga berhasil diubah!');
    }

    public function destroy(Student $Student){
        
        $Bunga->delete();

        return redirect()->route('Bloomify.index')->with('success', 'Bunga berhasil dihapus!');
    }
}

