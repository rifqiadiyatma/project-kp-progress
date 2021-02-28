<?php

namespace App\Controllers;
use App\Models\ModelHome;

class Home extends BaseController
{
	public function __construct() {
		$this->ModelHome = New ModelHome();
	}

	public function index()
	{
		$data = array(
			'title' => 'Home',
			'isi' => 'v_home',
			'page' => 'Home',
			'total_dokumen' => $this->ModelHome->total_dokumen(),
			'total_blmverif' => $this->ModelHome->total_blmverif(),
			'total_verif' => $this->ModelHome->total_verif(),
			'total_user' => $this->ModelHome->total_user(),
			'total_komponen1' => $this->ModelHome->total_komponen1(),
			'total_komponen2' => $this->ModelHome->total_komponen2(),
			'total_komponen3' => $this->ModelHome->total_komponen3(),
			'total_komponen4' => $this->ModelHome->total_komponen4(),
			'total_komponen5' => $this->ModelHome->total_komponen5(),
			'total_komponen6' => $this->ModelHome->total_komponen6(),


		);
		return view('layout/v_wrapper',$data);
	}
}
