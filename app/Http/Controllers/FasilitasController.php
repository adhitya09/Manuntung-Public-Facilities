<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('dashboard.superadmin.fasilitas', compact('fasilitas'));
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

    public function update(Request $request, Fasilitas $fasilitas)
    {
        dd($request->all());
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        try {
            $fasilitas->update($request->all());
            return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('fasilitas.index')->with('error', 'Gagal memperbarui fasilitas.');
        }
    }

    public function destroy(Fasilitas $fasilitas)
    {
        try {
            $fasilitas->delete();
            return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('fasilitas.index')->with('error', 'Gagal menghapus fasilitas.');
        }
    }
}
