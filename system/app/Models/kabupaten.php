<?php

namespace App\Models;

use App\Models\kecamatan;
use App\Models\provinsi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
	protected $table = 'kabupaten';

	function kecamatan(){
		return $this->hasMany(Kecamatan::class, 'id_kabupaten');
	}

	function provinsi(){
		return $this->belongsTo(Provinsi::clas, 'id_provinsi');
	}
}