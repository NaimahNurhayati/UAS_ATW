<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use App\Models\provinsi;

class PenggunaController extends Controller
{
  function home()
  {
    $data['list_produk'] = produk::paginate(2);
    return view('untukpengguna.home', $data);
  }

  function newarrival()
  {
    $data['list_produk'] = produk::paginate(3);
    return view('untukpengguna.produk', $data);
  }

  function checkout()
  {
    return view('untukpengguna.checkout');
  }

  function detailproduk(produk $produk)
  {
    $data['produk'] = $produk;
    return view('untukpengguna.detailproduk', $data);
  }

  function mail()
  {
    return view('untukpengguna.mail');
  }

  function pembayaran()
  {
    $data['list_produk'] = produk::paginate(1);
    $data1['list_provinsi'] = Provinsi::all();
    $data2['list_kategori'] = kategori::all();
    return view('untukpengguna.pembayaran', $data, $data1, $data2);
  }
}
