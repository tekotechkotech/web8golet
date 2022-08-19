<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Whoops\Run;

class PelangganController extends Controller
{
    public function index()
    {
        $th = ['No', 'Nama Instansi', 'Logo', 'Aksi'];
        
        $td = Pelanggan::all();
        
        return view('pelanggan', compact('th', 'td'));
    }

    public function create()
    {
        return view('pelanggan_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'gambar' => 'required',
        ]);
        // dd($request);

        if ($request->file('gambar')) {
            $gambar = $validated['gambar'] = $request->file('gambar');
                // isi dengan nama gambar
                $nama_gambar = "client_" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar->move($tempat,$nama_gambar);

                
                $data = new Pelanggan();
                $data->nama_pelanggan = $request->nama_pelanggan;
                $data->gambar = $nama_gambar;
                $data->save();
                
        }else{
            dd('gambar salah');
        }
        return redirect('/pelanggan')->with('status', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Pelanggan::find($id);
        return view('pelanggan_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'nullable',
            'gambar' => 'nullable',
        ]);
        // dd($request);
        
        $data = Pelanggan::find($id);
        $data->nama_pelanggan = $request->nama_pelanggan;
        $data->save();

        if ($request->file('gambar')) {
            $gambar = $validated['gambar'] = $request->file('gambar');
                // isi dengan nama gambar
                $nama_gambar = "client_" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar->move($tempat,$nama_gambar);

                
                $data = Pelanggan::find($id);
                $data->gambar = $nama_gambar;
                $data->save();
                
        }
        return redirect('/pelanggan')->with('status', 'Data berhasil diubah!');
    }

    public function destroy(Request $request)
    {
        $data = Pelanggan::find($request->id);
        $data->delete();

        return redirect('/pelanggan')->with('status', 'Data berhasil dihapus!');
    }

}
