<?php

namespace App\Http\Controllers;

use App\Models\promo;

class PromoController extends Controller
{
  function index()
  {
    $data['list_promo'] = promo::all();
    return view('promo.index', $data);
  }

  function create()
  {
    return view('promo.create');
  }

  function store()
  {
    $promo = new promo;
    $promo->nama = request('nama');
    $promo->jumlah = request('jumlah');
    $promo->harga_awal = request('harga_awal');
    $promo->harga_promo = request('harga_promo');
    $promo->deskripsi = request('deskripsi');
    $promo->save();

    return redirect('promo')->with('success', 'Data Berhasil Ditambahkan');
  }

  function show(promo $promo)
  {
    $data['promo'] = $promo;
    return view('promo.show', $data);
  }

  function edit(promo $promo)
  {
    $data['promo'] = $promo;
    return view('promo.edit', $data);
  }

  function update(promo $promo)
  {
    $promo->nama = request('nama');
    $promo->jumlah = request('jumlah');
    $promo->harga_awal = request('harga_awal');
    $promo->harga_promo = request('harga_promo');
    $promo->deskripsi = request('deskripsi');
    $promo->save();

    return redirect('promo')->with('warning', 'Data Berhasil Diedit');
  }

  function destroy(promo $promo)
  {
    $promo->delete();

    return redirect('promo')->with('danger', 'Data Berhasil Dihapus');
  }
}
