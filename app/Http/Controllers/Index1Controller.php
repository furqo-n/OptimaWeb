<?php

namespace App\Http\Controllers;

use Dba\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index1Controller extends Controller
{
    public function index()
    {
        $projectChunks = DB::connection('mysql_admin')->table('portofolios')->latest()->get()->chunk(3);
        $hero = DB::connection('mysql_admin')->table('gambars')->where('kategori', 'Hero')->latest()->get();
        $text1 = DB::connection('mysql_admin')->table('gambars')->where('id', '5')->first() ?? (object) ['gambar' => 'default.jpg'];
        $kliens = DB::connection('mysql_admin')->table('kliens')->get()->groupBy('kategori');

        return view('index1', compact('projectChunks', 'hero', 'text1', 'kliens'));
    }
}