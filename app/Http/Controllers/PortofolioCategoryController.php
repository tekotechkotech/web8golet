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
            'nama_kategori' => 'required|unique:portofolio_categories,nama_kategori',
            'deskripsi_kategori' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $gambar = $validated['gambar'] = $request->file('gambar');
                // isi dengan nama gambar
                $nama_gambar = "kategori" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar->move($tempat,$nama_gambar);

        }else{
            dd('gambar salah');
        }

        PortofolioCategory::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi_kategori' => $request->deskripsi_kategori,
            'img' => $nama_gambar,
        ]);
        return redirect('/kategori')->with('status', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = PortofolioCategory::find($id);
        return view('category_edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'nama_kategori' => 'required|unique:portofolio_categories,nama_kategori,'.$id.',id',
            'deskripsi_kategori' => 'required',
            'gambar' => 'nullable',
        ]);
        
        
        $data = PortofolioCategory::find($id);
        $data->nama_kategori = $request->nama_kategori;
        $data->deskripsi_kategori = $request->deskripsi_kategori;
        $data->save();

        if ($request->file('gambar')) {
            $gambar = $validated['gambar'] = $request->file('gambar');
                // isi dengan nama gambar
                $nama_gambar = "kategori_" .$request->nama_kategori. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar->move($tempat,$nama_gambar);

                $data = PortofolioCategory::find($id);
                $data->img = $nama_gambar;
                $data->save();
                
        }


        return redirect('/kategori')->with('status', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $data = PortofolioCategory::find($id);
        $data->delete();

        return redirect('/kategori')->with('status', 'Data berhasil dihapus!');
    }

}
