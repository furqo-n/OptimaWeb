<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeknologiController extends Controller
{
    public function index()
    {
        $teknologiChunks = DB::connection('mysql_admin')->table('teknologis')->latest()->get()->chunk(3);
        return view('Teknologi', compact('teknologiChunks'));
    }
}
