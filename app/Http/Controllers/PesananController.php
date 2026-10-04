<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::all();
        return view('Pesanan.index', compact('pesanans'));
    }

    public function create()
    {
        return view('Pesanan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nota_pesanan' => 'required',
            'nama_bunga_dipesan' => 'required',
            'jumlah_beli' => 'required|integer',
            'total_bayar' => 'required|integer',
        ]);

        Pesanan::create($data);
        return redirect()->route('Pesanan.index')->with('success', 'Data Pesanan berhasil ditambah!');
    }

    public function show(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('Pesanan.show', compact('pesanan'));
    }

    public function edit(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('Pesanan.edit', compact('pesanan'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nota_pesanan' => 'required',
            'nama_bunga_dipesan' => 'required',
            'jumlah_beli' => 'required|integer',
            'total_bayar' => 'required|integer',
        ]);

        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($data);

        return redirect()->route('Pesanan.index')->with('success', 'Data Pesanan berhasil diubah!');
    }

    public function destroy(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();

        return redirect()->route('Pesanan.index')->with('success', 'Data Pesanan berhasil dihapus!');
    }
}
