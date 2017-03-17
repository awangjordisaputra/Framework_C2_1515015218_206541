<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
class dosenController extends Controller
{
     public function awal()
	{
		return "Hello dari dosenController";
	}
	public function tambah()
	{
		return $this->simpan();

	}
	public function simpan()
	{
	$dosen = new dosen();
            $dosen->id_dosen = '3';
            $dosen->nama_dosen = 'Rosmasari';
            $dosen->nip = '206541';
            $dosen->alamat = 'Samarinda';
            $dosen->pengguna_id = '6';
            $dosen->save();
	return "data dengan username {$dosen->id_dosen} telah disimpan";  
}
}