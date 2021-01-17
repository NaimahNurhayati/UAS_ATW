<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kabupaten;
use App\Models\kecamatan;
use App\Models\desa;

class AlamatResource extends Controller
{
    function getKabupaten($id_provinsi)
    {
        return Kabupaten::where("id_provinsi", $id_provinsi)->get()->toJson();
    }

    function getKecamatan($id_kabupaten)
    {
        return Kecamatan::where("id_kabupaten", $id_kabupaten)->get()->toJson();
    }

    function getDesa($id_kecamatan)
    {
        return Desa::where("id_kecamatan", $id_kecamatan)->get()->toJson();
    }
}