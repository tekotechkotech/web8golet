<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Portofolio;
use App\Models\PortofolioCategory;
use App\Models\PortofolioGalery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    public function index()
    {
        $th = ['No', 'Nama Project', 'Link', 'Tanggal Pemesanan', 'Klien', 'Kategori','Aksi'];

        $td = Portofolio::join('portofolio_categories', 'portofolio_categories.id', '=', 'portofolios.categories_id')
            ->join('pelanggans', 'pelanggans.id', '=', 'portofolios.pelanggan_id')
            // ->join('portofolios.id', 'portofolios.nama_project', 'portofolios.link', 'portofolios.tanggal_pemesanan', 'pelanggans.nama_pelanggan', 'portofolio_categories.nama_kategori')
            ->select('*','portofolios.id as id_portofolio')
            ->get();

            // dd($td);

        return view('portofolio', compact('td', 'th'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();

        $kategori = PortofolioCategory::all();

        return view('/portofolio_tambah'
        ,compact('pelanggan','kategori')
    );
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_portofolio' => 'required',
            'slug' => 'required',
            'link' => 'required',
            'deskripsi_portofolio' => 'required',
        ]);
        // dd($request);
        $porto = Portofolio::create([
            'nama_portofolio' => $request->nama_portofolio,
            'slug' => $request->slug,
            'link' => $request->link,
            'tanggal_pesan' => $request->tanggal_pesan,
            'deskripsi_portofolio' => $request->deskripsi_portofolio,
            'pelanggan_id' => $request->pelanggan,
            'categories_id' => $request->kategori,
        ]);

        
        if ($request->file('gambar1')) {
            $gambar1 = $validated['gambar1'] = $request->file('gambar1');
                // isi dengan nama gambar1
                $nama_gambar1 = "kategori" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar1->move($tempat,$nama_gambar1);

                Portofolio::where('id', $porto->id)->update([
                    'gambar1' => $nama_gambar1,
                ]);
        }
        if ($request->file('gambar2')) {
            $gambar2 = $validated['gambar2'] = $request->file('gambar2');
                // isi dengan nama gambar2
                $nama_gambar2 = "kategori" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar2->move($tempat,$nama_gambar2);

                Portofolio::where('id', $porto->id)->update([
                    'gambar2' => $nama_gambar2,
                ]);
        }
        if ($request->file('gambar3')) {
            $gambar3 = $validated['gambar3'] = $request->file('gambar3');
                // isi dengan nama gambar3
                $nama_gambar3 = "kategori" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar3->move($tempat,$nama_gambar3);

                Portofolio::where('id', $porto->id)->update([
                    'gambar3' => $nama_gambar3,
                ]);
        }

        return redirect('/portofolio')->with('status', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $porto = Portofolio::join('portofolio_categories', 'portofolio_categories.id', '=', 'portofolios.categories_id')
            ->join('pelanggans', 'pelanggans.id', '=', 'portofolios.pelanggan_id')
            ->select('*','portofolios.id as id_portofolio')
            ->where('portofolios.id', $id)
            ->first();

        $pelanggan = Pelanggan::all();
        $kategori = PortofolioCategory::all();
        return view('portofolio_edit', compact('porto','pelanggan','kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_portofolio' => 'required',
            'slug' => 'required',
            'link' => 'required',
            'deskripsi_portofolio' => 'required',
        ]);
        $porto = Portofolio::find($id);
        $porto->update([
            'nama_portofolio' => $request->nama_portofolio,
            'link' => $request->link,
            'tanggal_pesan' => $request->tanggal_pesan,
            'deskripsi_portofolio' => $request->deskripsi_portofolio,
            'pelanggan_id' => $request->pelanggan,
            'categories_id' => $request->kategori,
        ]);

        if ($request->file('gambar1')) {
            $gambar1 = $validated['gambar1'] = $request->file('gambar1');
                // isi dengan nama gambar1
                $nama_gambar1 = "kategori" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar1->move($tempat,$nama_gambar1);

                Portofolio::where('id', $porto->id)->update([
                    'gambar1' => $nama_gambar1,
                ]);
        }
        if ($request->file('gambar2')) {
            $gambar2 = $validated['gambar2'] = $request->file('gambar2');
                // isi dengan nama gambar2
                $nama_gambar2 = "kategori" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar2->move($tempat,$nama_gambar2);

                Portofolio::where('id', $id)->update([
                    'gambar2' => $nama_gambar2,
                ]);
        }
        if ($request->file('gambar3')) {
            $gambar3 = $validated['gambar3'] = $request->file('gambar3');
                // isi dengan nama gambar3
                $nama_gambar3 = "kategori" .$request->nama_pelanggan. "_" . uniqid() . ".jpg";
                // isi dengan nama folder tempat kemana file diupload
                $tempat ="assets/gambar/";
                $gambar3->move($tempat,$nama_gambar3);

                Portofolio::where('id', $id)->update([
                    'gambar3' => $nama_gambar3,
                ]);
        }
        return redirect('/portofolio')->with('status', 'Data berhasil diubah!');
    }

    public function  destroy( $id)
    {
        $porto = Portofolio::find($id);
        $porto->delete();
        // dd($id);
        // Portofolio::where('id',  $id)->delete();
        
        // dd($id);    
        return redirect('/portofolio')->with('status', 'Data berhasil dihapus!');
    }
}