<?php
namespace App\Http\Controllers;
use App\Models\kategori;
use App\Models\produk;
use App\Models\provinsi;

class TemplateController extends Controller{
	
	function showTemplate()
	{
		return view('template.base');
	}

	function showTemplatedetail()
	{
		return view('template.detail');
	}

	function showTemplatelogin()
	{
		return view('template.login');
	}

	function showTemplateproduk()
	{
		return view('template.produk');
	}

	function showCard()
	{
		$data['list_produk'] = produk::paginate(1);
		$data1['list_provinsi'] = Provinsi::all();
		$data2['list_kategori'] = kategori::all();
		return view('template.card', $data, $data1, $data2);
	}

	function showChekout()
	{
		$data['list_kategori'] = kategori::all();
		return view('template.chekout', $data);
	}
}