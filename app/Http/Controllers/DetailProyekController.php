<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailProyekController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('id');
        $detailproyek = DB::connection('mysql_admin')->table('portofolios')->where('id', $id)->first();
        $advantages = json_decode($detailproyek->advantages);
        return view('detailproyek', compact('detailproyek', 'advantages'));
    }
}
