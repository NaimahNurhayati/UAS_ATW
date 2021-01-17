<?php

namespace App\Http\Controllers;

use App\Models\kategori;

class KategoriController extends Controller
{
	function index()
	{
		$user = request()->user();
		$data['list_kategori'] = $user->kategori;
		return view('kategori.index', $data);
	}

	function create()
	{
		return view('kategori.create');
	}

	function store()
	{
		$kategori = new kategori;
		$kategori->id_user = request()->user()->id;
		$kategori->nama_kategori = request('nama_kategori');
		$kategori->deskripsi = request('deskripsi');
		$kategori->save();

		return redirect('kategori');
	}

	function show(kategori $kategori)
	{
		$data['kategori'] = $kategori;
		return view('kategori.show', $data);
	}

	function edit(kategori $kategori)
	{
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data);
	}

	function update(kategori $kategori)
	{
		$kategori->nama_kategori = request('nama_kategori');
		$kategori->deskripsi = request('deskripsi');
		$kategori->save();

		return redirect('kategori')->with('warning', 'Data Berhasil Diedit');
	}

	function destroy(kategori $kategori)
	{
		$kategori->delete();

		return redirect('kategori')->with('danger', 'Data Berhasil Dihapus');
	}
}
