<?php

namespace App\Http\Controllers;

use App\Models\provinsi;

class HomeController extends Controller
{

	function showBeranda()
	{
		return view('beranda');
	}

	function showHome()
	{
		return view('admin.home');
	}

	function showProduk()
	{
		return view('produk');
	}

	function testAjax()
	{
		$data['list_provinsi'] = provinsi::all();
		return view('test-ajax', $data);
	}
}
