<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('Supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('Supplier.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_supplier' => 'required',
            'nama_tanaman_pasokan' => 'required',
            'kontak_supplier' => 'required',
        ]);

        Supplier::create($data);
        return redirect()->route('Supplier.index')->with('success', 'Data Supplier berhasil ditambah!');
    }

    public function show(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('Supplier.show', compact('supplier'));
    }

    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('Supplier.edit', compact('supplier'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama_supplier' => 'required',
            'nama_tanaman_pasokan' => 'required',
            'kontak_supplier' => 'required',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($data);

        return redirect()->route('Supplier.index')->with('success', 'Data Supplier berhasil diubah!');
    }

    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('Supplier.index')->with('success', 'Data Supplier berhasil dihapus!');
    }
}
