<?php

namespace App\Http\Controllers;

use App\Models\PortofolioCategory;
use Illuminate\Http\Request;

class PortofolioCategoryController extends Controller
{
    public function index()
    {
        $data = PortofolioCategory::all();

        return view('category', compact('data'));
    }

    public function create()
    {
        return view('category_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'deskripsi_kategori' => 'required',
            'keterangan' => 'required',
        ]);

        $data = PortofolioCategory::create($request->all());

        return redirect('/kategori_portofolio')->with('status', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = PortofolioCategory::find($id);
        return view('category_edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'keterangan' => 'required',
        ]);

        $data = PortofolioCategory::find($id);
        $data->nama_kategori = $request->nama_kategori;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/kategori_portofolio')->with('status', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $data = PortofolioCategory::find($id);
        $data->delete();

        return redirect('/kategori_portofolio')->with('status', 'Data berhasil dihapus!');
    }

}
