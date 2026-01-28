<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KarirController extends Controller
{
    public function index()
    {
        $karirs = DB::connection('mysql_admin')->table('karirs')->get();
        return view('karir', compact('karirs'));
    }
}
