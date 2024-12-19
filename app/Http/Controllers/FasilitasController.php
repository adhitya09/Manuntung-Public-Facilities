<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        $title = 'Fasilitas';
        return view('dashboard.superadmin.fasilitas.index', compact('fasilitas', 'title'));
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Fasilitas::create($request->all());
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        try {
            // Cari data berdasarkan ID
            $fasilitas = Fasilitas::findOrFail($id);

            // Update data
            $fasilitas->update([
                'nama_toko' => $request->input('nama_toko'),
                'alamat' => $request->input('alamat'),
                'latitude' => $request->input('latitude'),
                'longitude' => $request->input('longitude'),
            ]);

            return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('fasilitas.index')->with('error', 'Gagal memperbarui fasilitas. ' . $e->getMessage());
        }
    }




    // public function destroy(Fasilitas $fasilitas)
    // {
    //     try {
    //         $fasilitas->delete();
    //         return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus.');
    //     } catch (\Exception $e) {
    //         return redirect()->route('fasilitas.index')->with('error', 'Gagal menghapus fasilitas.');
    //     }
    // }
    public function destroy($id)
    {
        $product = Fasilitas::findOrFail($id);
        $product->delete();

        return redirect()->route('fasilitas.index')->with('success', 'Produk Berhasil Dihapus!');
    }
}
