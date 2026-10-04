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
        $dataBunga = $request->validate([
            'nama_bunga' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required',
            'kategori' => 'required',
        ]);

        Bloomify::create($dataBunga);
        return redirect()->route('list')->with('success', 'Bunga berhasil ditambah');
    }

    public function show(String $id){
        $Bunga = Bloomify::findOrFail($id);
        return view('Bloomify.show', compact('Bunga'));
    }

     public function edit(String $id){
        $Bunga = \App\Models\Bloomify::findOrFail($id);
        return view('Bloomify.edit', compact('Bunga'));
    }

    public function update(Request $request, String $id){
        $data = $request->validate([
            'nama_bunga' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required',
            'kategori' => 'required',
        ]);

        $Bunga = Bloomify::findOrFail($id);
        $Bunga->update($data);

        return redirect()->route('list')->with('success', 'Data bunga berhasil diubah!');
    }

    public function destroy(String $id){
        $Bunga = Bloomify::findOrFail($id);
        $Bunga->delete();

        return redirect()->route('list')->with('success', 'Bunga berhasil dihapus!');
    }
}

