<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class produk extends Model
{
	use ProdukAttributes, ProdukRelations;

	protected $table = 'produk';

	protected $casts = [
		'created_at' => 'datetime',
		'berat' => 'decimal:2',
	];

	// function seller()
	// {
	// 	return $this->belongsTo(User::class, 'id_user');
	// }

	// function getHargaAttribute(){
	// 	return "Rp. ".number_format($this->attributes['harga']); 
	// }

	// function getTanggalProduksiAttribute(){
	// 	$tanggal = $this->created_at;
	// 	return strftime("%d %b %y", strtotime($this->created_at));
	// }

	// function handleUploadFoto(){
	// 	if(request()->hasFile('foto')){
	// 		$foto = request()->file('foto');
	// 		$destination = "images/produk";
	// 		$randomStr = Str::random(5);
	// 		$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
	// 		$url = $foto->storeAs($destination, $filename);
	// 		$this->foto = "app/".$url;
	// 		$this->save();
	// 	}
	// }
}
