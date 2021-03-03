<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function profil()
    {
        return view('profil');
    }

    public function berita()
    {
        return view('berita');
    }

    public function kelembagaan()
    {
        return view('kelembagaan');
    }

    public function data()
    {
        return view('data');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function gallery()
    {
        return view('gallery');
    }
}
