<?php

namespace App\Controllers;
use App\Models\ModelDokumen;
use App\Models\ModelKomponen;

class Komponen extends BaseController
{
	public function __construct() {
		helper('form');
        $this->ModelDokumen = new ModelDokumen();
        $this->ModelKomponen = new ModelKomponen();
	}

	public function manajemen()
	{
		$data = array(
			'title' => 'Manajemen Perubahan',
			'isi' => 'komponen/v_manajemen',
			'manajemen' => $this->ModelKomponen->get_komponen1(),
			'page' => 'Manajemen Perubahan',
		);
		return view('layout/v_wrapper',$data);
	}

    public function tatalaksana()
	{
		$data = array(
			'title' => 'Penataan Tatalaksana',
			'isi' => 'komponen/v_tatalaksana',
			'tatalaksana' => $this->ModelKomponen->get_komponen2(),
			'page' => 'Penataan Tatalaksana'
		);
		return view('layout/v_wrapper',$data);
	}

    public function penataansdm()
	{
		$data = array(
			'title' => 'Penataan Manajemen SDM',
			'isi' => 'komponen/v_penataansdm',
			'sdm' => $this->ModelKomponen->get_komponen3(),
			'page' => 'Penataan Manajemen SDM'
		);
		return view('layout/v_wrapper',$data);
	}

    public function akuntabilitas()
	{
		$data = array(
			'title' => 'Penguatan Akuntabilitas',
			'isi' => 'komponen/v_akuntabilitas',
			'akuntabilitas' => $this->ModelKomponen->get_komponen4(),
			'page' => 'Penguatan Akuntabilitas'
		);
		return view('layout/v_wrapper',$data);
	}

    public function pengawasan()
	{
		$data = array(
			'title' => 'Penguatan Pengawasan',
			'isi' => 'komponen/v_pengawasan',
			'pengawasan' => $this->ModelKomponen->get_komponen5(),
			'page' => 'Penguatan Pengawasan'
		);
		return view('layout/v_wrapper',$data);
	}

    public function pelayananpublik()
	{
		$data = array(
			'title' => 'Pelayanan Publik',
			'isi' => 'komponen/v_pelayananpublik',
			'pelayananpublik' => $this->ModelKomponen->get_komponen6(),
			'page' => 'Pelayanan Publik'
		);
		return view('layout/v_wrapper',$data);
	}
}
