<?php

namespace App\Http\Controllers;

use App\Models\kategori_ebook;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string',
        ]);

        kategori_ebook::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);

        return redirect()->route('kategori.data')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function indexData()
    {
        $kategori_ebooks = kategori_ebook::all();
        return view('kategori.data', compact('kategori_ebooks'));
    }

    public function edit($id)
    {
        $kategori_ebooks = kategori_ebook::findOrFail($id);
        return view('kategori.edit', compact('kategori_ebooks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string',
        ]);

        $kategori_ebooks = kategori_ebook::findOrFail($id);
        $kategori_ebooks->update([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);

        return redirect()->route('kategori.data')->with('success', 'Kategori berhasil diperbarui!');
    }

}
