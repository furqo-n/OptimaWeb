<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = DB::connection('mysql_admin')->table('kontaks')->where('id', '1')->first();
        $kontaks = DB::connection('mysql_admin')->table('kontaks')->get();
        return view('kontak', compact('kontak', 'kontaks'));
    }
}
