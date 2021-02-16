<?php

namespace App\Controllers;

class Komponen extends BaseController
{
	public function __construct() {

	}

	public function manajemen()
	{
		$data = array(
			'title' => 'Manajemen Perubahan',
			'isi' => 'komponen/v_manajemen',
			'page' => 'Manajemen Perubahan',
		);
		return view('layout/v_wrapper',$data);
	}

    public function tatalaksana()
	{
		$data = array(
			'title' => 'Penataan Tatalaksana',
			'isi' => 'komponen/v_tatalaksana',
			'page' => 'Penataan Tatalaksana'
		);
		return view('layout/v_wrapper',$data);
	}

    public function penataansdm()
	{
		$data = array(
			'title' => 'Penataan Manajemen SDM',
			'isi' => 'komponen/v_penataansdm',
			'page' => 'Penataan Manajemen SDM'
		);
		return view('layout/v_wrapper',$data);
	}

    public function akuntabilitas()
	{
		$data = array(
			'title' => 'Penguatan Akuntabilitas',
			'isi' => 'komponen/v_akuntabilitas',
			'page' => 'Penguatan Akuntabilitas'
		);
		return view('layout/v_wrapper',$data);
	}

    public function pengawasan()
	{
		$data = array(
			'title' => 'Penguatan Pengawasan',
			'isi' => 'komponen/v_pengawasan',
			'page' => 'Penguatan Pengawasan'
		);
		return view('layout/v_wrapper',$data);
	}

    public function pelayananpublik()
	{
		$data = array(
			'title' => 'Pelayanan Publik',
			'isi' => 'komponen/v_pelayananpublik',
			'page' => 'Pelayanan Publik'
		);
		return view('layout/v_wrapper',$data);
	}
}
