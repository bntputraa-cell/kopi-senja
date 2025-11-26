<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GubukSenjaController extends Controller
{
    // ... (Method index dan menuIndex yang sudah ada) ...
    
    /**
     * Menampilkan halaman utama (landing page) Gubuk Senja.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Menampilkan halaman menu lengkap.
     */
    public function menuIndex()
    {
        return view('menu_lengkap');
    }

    /**
     * Menampilkan halaman fasilitas lengkap.
     */
    public function fasilitasIndex()
    {
        // Mengembalikan view fasilitas yang baru kita buat
        return view('fasilitas_lengkap');
    }
}