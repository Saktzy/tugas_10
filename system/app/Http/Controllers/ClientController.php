<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{

    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        return view('client/shop', $data);
    }


    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('client.index', $data);
    }

    function showCart()
    {
        return view('client.cart');
    }

    function showShop()
    {
        $data['list_produk'] = Produk::all();
        return view('client.shop', $data);
    }

    function showProduct(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('client.product', $data);
    }
}
