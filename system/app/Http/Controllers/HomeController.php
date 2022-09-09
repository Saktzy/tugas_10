<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    function showBeranda()
    {
        return view('admin.content.dashboard');
    }

    function showProduk()
    {
        return view('admin.content.produk');
    }

    function showKategori()
    {
        return view('admin.content.kategori');
    }

   
    function showPromo()
    {
        return view('admin.content.promo');
    }

    function showPelanggan()
    {
        return view('admin.content.pelanggan');
    }

    function showSupplier()
    {
        return view('admin.content.supplier');
    }
}
