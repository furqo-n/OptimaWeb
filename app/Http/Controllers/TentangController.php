<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangController extends Controller
{
    public function index()
    {
        $logo = DB::connection('mysql_admin')->table('gambars')->where('kategori', 'Logo')->first();
        $kliens = DB::connection('mysql_admin')->table('kliens')->get();
        $text1 = DB::connection('mysql_admin')->table('gambars')->where('id', '1')->first();
        return view('TentangKami', compact('logo', 'kliens', 'text1'));
    }
}
