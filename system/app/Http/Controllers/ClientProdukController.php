<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;

class ClientProdukController extends Controller
{
	function showTemplateproduk()
	{
		$data['list_kategori'] = kategori::all();
		$dataa['list_produk'] = produk::paginate(5);
		return view('template.produk', $data, $dataa);
	}

	function show(produk $produk)
	{
		$dataa['list_kategori'] = kategori::all();
		$data['produk'] = $produk;

		return view('template.show', $data, $dataa);
	}

	function filter()
	{
		$nama = request('nama');
		$color = request('color');
		$size = request('size');
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// where untuk menampilkan nama
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->where('color', [$color])->where('size', [$size])->whereBetween('harga', [$harga_min, $harga_max])->get();

		$data['nama'] = request('nama');
		$data['color'] = request('color');
		$data['size'] = request('size');
		$dataa['list_kategori'] = kategori::all();

		return view('template.produk', $data, $dataa);
	}
}
