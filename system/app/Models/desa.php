<?php

namespace App\Models;

use App\Models\kecamatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model {
	protected $table = 'desa';

	function kecamatan(){
		return $this->belongsTo(Kecamatan::clas, 'id_kecamatan');
	}
}