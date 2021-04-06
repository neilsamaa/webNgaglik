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

    public function sejarah()
    {
        return view('sejarah');
    }

    public function visimisi()
    {
        return view('visimisi');
    }

    public function artilambang()
    {
        return view('artilambang');
    }

    public function wilayah()
    {
        return view('wilayah');
    }

    public function struktur()
    {
        return view('struktur');
    }

    public function dasarhukum()
    {
        return view('dasarhukum');
    }

    public function layanan()
    {
        return view('layanan');
    }
    
    public function aparatur()
    {
        return view('aparatur');
    }

    public function data()
    {
        return view('/data/data');
    }

    public function fasilitas_umum()
    {
        return view('/data/fasilitas-umum');
    }

    public function fasilitas_sosial()
    {
        return view('/data/fasilitas-sosial');
    }

    public function fasilitas_ekonomi()
    {
        return view('/data/fasilitas-ekonomi');
    }

    public function fasilitas_khusus()
    {
        return view('/data/fasilitas-khusus');
    }

    public function poskamling()
    {
        return view('/data/poskamling');
    }

    public function bank_sampah()
    {
        return view('/data/bank-sampah');
    }

    public function tempat_wisata()
    {
        return view('/data/tempat-wisata');
    }

    public function layanan_administrasi()
    {
        return view('/layanan-administrasi');
    }

    public function pengumuman()
    {
        return view('/pengumuman');
    }

    public function lpmk()
    {
        return view('/lembaga/lpmk');
    }

    public function pkk()
    {
        return view('/lembaga/pkk');
    }

    public function kim()
    {
        return view('/lembaga/kim');
    }
}
