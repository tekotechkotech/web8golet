<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Portofolio;
use App\Models\PortofolioCategory;
use App\Models\Team;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $cat = PortofolioCategory::all();
        $cate = PortofolioCategory::all();

        $porto = Portofolio::join('portofolio_categories', 'portofolio_categories.id', '=', 'portofolios.categories_id')
        ->select('*','portofolio_categories.id as id_kat')
        ->get();

        $klien = Pelanggan::all();
        $team = Team::all();

        return view('web.index',compact('cat','cate','porto','klien','team'));
    }

    public function detail($slug)
    {
        $porto = Portofolio::join('portofolio_categories', 'portofolio_categories.id', '=', 'portofolios.categories_id')
        ->join('pelanggans', 'pelanggans.id', '=', 'portofolios.pelanggan_id')
        ->select('*','portofolios.id as id_portofolio')
        ->where('portofolios.slug',$slug)
        ->first();

        return view('web.porto_detail',compact('porto'));
    }
}
