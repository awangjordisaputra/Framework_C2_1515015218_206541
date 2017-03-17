<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;
class matakuliahController extends Controller
{
   public function awal()
	{
		return "Hello dari matakuliahController";
	}
	public function tambah()
	{
		return $this->simpan();

	}
	public function simpan()
	{
	$matakuliah = new matakuliah();
	$matakuliah->id_matakuliah = 'FrameWork';
	$matakuliah->title_matakuliah = 'Frame';
	$matakuliah->save();
	return "data dengan username {$matakuliah->id_matakuliah} telah disimpan";  
}
}