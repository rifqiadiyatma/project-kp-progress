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

		);
		return view('layout/v_wrapper',$data);
	}
}
