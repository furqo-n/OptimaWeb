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
        View::composer('*', function ($view) {
            try {
                $logodata = DB::connection('mysql_admin')->table('gambars')->where('id', '7')->first();
                $logodata2 = DB::connection('mysql_admin')->table('gambars')->where('id', '8')->first();
                $gambardata = DB::connection('mysql_admin')->table('gambars')->pluck('gambar', 'kategori');

                $view->with('logo', $logodata);
                $view->with('logo2', $logodata2);
                $view->with('gambardata', $gambardata);
            } catch (\Exception $e) {
                // Prevent boot errors if DB is missing configuration or connection
            }
        });
    }
}
