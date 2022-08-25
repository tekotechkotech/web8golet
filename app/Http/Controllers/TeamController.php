<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $th = ['No', 'Nama', 'Jabatan', 'Sosial Media', 'Aksi'];

        $td = Team::all();

        return view('team',compact('th','td'));
    }
    
    public function create()
    {
        return view('team_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);



        if ($request->file('gambar')) {
            $gambar = $validated['gambar'] = $request->file('gambar');
                // isi dengan nama gambar
                $nama_gambar = "team_" .$request->nama. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar->move($tempat,$nama_gambar);
        }
        Team::create([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'tulisan' => $request->deskripsi,
                'twit' => $request->twitter,
                'fb' => $request->facebook,
                'ig' => $request->instagram,
                'linkdin' => $request->linkedin,
                'img' => $nama_gambar,
            ]);

        return redirect('/team')->with('status', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Team::find($id);
        return view('team_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'nullable',
            'gambar' => 'nullable',
        ]);
        // dd($request);
        
        $data = Team::find($id);
        $data->nama_pelanggan = $request->nama_pelanggan;
        $data->save();

        if ($request->file('gambar')) {
            $gambar = $validated['gambar'] = $request->file('gambar');
                // isi dengan nama gambar
                $nama_gambar = "client_" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar->move($tempat,$nama_gambar);

                
                $data = Team::find($id);
                $data->gambar = $nama_gambar;
                $data->save();
                
        }
        return redirect('/pelanggan')->with('status', 'Data berhasil diubah!');
    }

    public function destroy(Request $request)
    {
        $data = Team::find($request->id);
        $data->delete();

        return redirect('/pelanggan')->with('status', 'Data berhasil dihapus!');
    }

}
