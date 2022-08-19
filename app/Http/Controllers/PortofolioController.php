<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $data = Portofolio::join('portofolio_categories', 'portofolio_categories.id', '=', 'portofolios.categories_id')
            ->join('pelanggans', 'pelanggans.id', '=', 'portofolios.pelanggan_id')
            ->get();

        return view('portofolio', compact('data'));
    }
}
