<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TobaController extends BaseController
{
	public function toba()
	{
		return view ('Toba.index');
	}

	public function Penginapan(){
		return view ('Toba.Penginapan_all');
	}	
	public function penginapan2(){
		return view ('Toba.Penginapan_hotel');
	}

	public function penginapan3(){
		return view ('Toba.Penginapan_homestay');
	}


	public function poo(){
		return view ('Toba.Oleholeh_all');
	}
	
	public function kuliner(){
		return view ('Toba.kuliner_all');
	}
	public function kuliner2(){
		return view ('Toba.kuliner_rm');
	}
	public function kuliner3(){
		return view ('Toba.kuliner_cafe');
	}

	public function transportasi(){
		return view ('Toba.transportasi_all');
	}
	public function transportasi2(){
		return view ('Toba.transportasi_umum');
	}
	public function transportasi3(){
		return view ('Toba.transportasi_travel');
	}

	public function umum(){
		return view ('Toba.umum_all');}
	public function umum2(){
		return view ('Toba.umum_bank');}
	public function umum3(){
		return view ('Toba.umum_pos');}
	public function umum4(){
		return view ('Toba.umum_polisi');}
	public function umum5(){
		return view ('Toba.umum_ibadah');}

	public function batikta(){
		return view ('Toba.batikta');}
	public function museum(){
		return view ('Toba.museum_tb');}
	public function serenauli(){
		return view ('Toba.serenauli');}
	public function kbt(){
		return view ('Toba.kbt');}	




}
