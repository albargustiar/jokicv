<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Metode untuk menampilkan halaman utama
    public function index()
    {
        return view('main');
    }

    // Metode untuk menampilkan halaman admin
    public function adminIndex()
    {
        return view('admin.index' , ['title' => 'Halaman Admin']);
    }
}

