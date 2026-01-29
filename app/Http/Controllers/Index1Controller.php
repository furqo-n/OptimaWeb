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
        $features = [
            ['title' => 'Tim', 'icon' => 'bx bx-community'],
            ['title' => 'Clean Code', 'icon' => 'bx bx-code'],
            ['title' => 'Terjangkau', 'icon' => 'bx bx-diamond-alt'],
            ['title' => 'Scrum', 'icon' => 'bx bx-sitemap'],
            ['title' => 'Perangkat Lunak Berkualitas', 'icon' => 'bx bx-like'],
            ['title' => 'Transparan & Jujur', 'icon' => 'bx bx-check-square'],
            ['title' => 'TDD', 'icon' => 'bx bx-copy-list'],
            ['title' => 'Inovatif', 'icon' => 'bx bx-rocket'],
            ['title' => 'Creatif', 'icon' => 'bx bx-light-bulb-alt'],
        ];

        return view('index1', compact('projectChunks', 'hero', 'text1', 'kliens', 'features'));
    }
}