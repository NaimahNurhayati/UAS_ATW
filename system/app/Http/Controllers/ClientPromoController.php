<?php

namespace App\Http\Controllers;

use App\Models\promo;
use App\Models\produk;
use App\Models\kategori;


class ClientPromoController extends Controller
{
  function showTemplatepromo()
  {
    $dataaa['list_promo'] = promo::all();
    $data['list_kategori'] = kategori::all();
    $dataa['list_produk'] = produk::all();

    return view('template.promo', $dataaa, $data, $dataa);
  }

  function show(promo $promo)
  {
    $dataa['list_kategori'] = kategori::all();
    $dataaa['promo'] = $promo;

    return view('template.showpromo', $dataa, $dataaa);
  }
}
