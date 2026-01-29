<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimPerangkatLunakKhususController extends Controller
{
    public function index()
    {
        $features = [
            ['title' => 'Menghemat biaya', 'graph' => 'Kami memilih tim dengan cermat dan teliti untuk menekan biaya pada mitra semenarik mungkin.', 'icon' => 'bx bxs-check-circle'],
            ['title' => 'Komunikasi', 'graph' => 'Tim kami berada ditempat mitra kami sehingga komunikasi bisa berjalan dengan baik.', 'icon' => 'bx bxs-phone'],
            ['title' => 'Profesional', 'graph' => 'Tim yang kami susun merupakan tim profesional yang telah berpengalaman untuk mitra kami.', 'icon' => 'bx bxs-community'],
            ['title' => 'Fleksibilitas', 'graph' => 'Mitra mendapatkan tim dengan fleksibilatas yang tinggi, sehingga mitra mendapatkan hasil yang lebih baik.', 'icon' => 'bx bxs-cog bx-spin'],
            ['title' => 'Pilihan', 'graph' => 'Mitra bisa memilih personil dalam tim yang akan ditempatkan pada mitra tersebut.', 'icon' => 'bx bxs-select'],
        ];
        return view('TimPerangkatLunakKhusus', compact('features'));
    }
}
