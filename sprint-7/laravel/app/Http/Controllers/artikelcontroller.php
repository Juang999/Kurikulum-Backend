<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelcontroller extends Controller
{
    public function index()
    {
        return view('tools.halaman');
    }

    public function home()
    {
        return view('welcome');
    }
}