<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswaController extends Controller
{
     public function awal()
	{
		return "Hello dari mahasiswaController";
	}
	public function tambah()
	{
		return $this->simpan();

	}
	public function simpan()
	{
	$mahasiswa = new mahasiswa();
            $mahasiswa->nama_mahasiswa = 'AwangJordi';
            $mahasiswa->nim = '1515015218';
            $mahasiswa->alamat_mhs = 'Juanda';
            $mahasiswa->pengguna_id = '1';
            $mahasiswa->save();
	return "data dengan username {$mahasiswa->nama_mahasiswa} telah disimpan";  
}
}