<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // 1. Menampilkan Tabel Data Pelanggan
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('Pelanggan.index', compact('pelanggans'));
    }

    // 2. Menampilkan Form Tambah Pelanggan
    public function create()
    {
        return view('Pelanggan.create');
    }

    // 3. Menyimpan Data Pelanggan Baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_pelanggan' => 'required',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required',
        ]);

        Pelanggan::create($data);
        return redirect()->route('Pelanggan.index')->with('success', 'Data Pelanggan berhasil ditambah!');
    }

    // 4. Menampilkan Detail Pelanggan
    public function show(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('Pelanggan.show', compact('pelanggan'));
    }

    // 5. Menampilkan Form Edit Pelanggan
    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('Pelanggan.edit', compact('pelanggan'));
    }

    // 6. Memperbarui Data Pelanggan
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama_pelanggan' => 'required',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($data);

        return redirect()->route('Pelanggan.index')->with('success', 'Data Pelanggan berhasil diubah!');
    }

    // 7. Menghapus Data Pelanggan
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('Pelanggan.index')->with('success', 'Data Pelanggan berhasil dihapus!');
    }
}
