<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    public function index(Request $request)
    {
        $portocategory = DB::connection('mysql_admin')->table('portofolios')->get()->groupBy('kategori_produk');
        $activeCategory = $request->get('category');
        return view('portofolio', compact('portocategory', 'activeCategory'));
    }
}
