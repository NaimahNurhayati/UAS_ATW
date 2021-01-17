<?php

namespace App\Models;

class kategori extends Model
{
	protected $table = 'kategori';

	function seller()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
