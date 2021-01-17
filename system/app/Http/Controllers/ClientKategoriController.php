<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;

class ClientKategoriController extends Controller
{

  function showTemplate()
  {
    $data['list_kategori'] = kategori::all();
    $dataa['list_produk'] = produk::all();
    return view('template.base', $data, $dataa);
  }


  function show(kategori $kategori)
  {
    $data['kategori'] = $kategori;
    $dataa['produk'] = $produk;
    return view('kategori.show', $data, $dataa);
  }
}
