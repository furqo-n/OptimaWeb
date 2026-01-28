<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $logodata = DB::connection('mysql_admin')->table('gambars')->where('id', '7')->first();
        $logodata2 = DB::connection('mysql_admin')->table('gambars')->where('id', '8')->first();
        $gambardata = DB::connection('mysql_admin')->table('gambars')->pluck('gambar', 'kategori');
        View::share('logo', $logodata);
        View::share('logo2', $logodata2);
        View::share('gambardata', $gambardata);
    }
}
