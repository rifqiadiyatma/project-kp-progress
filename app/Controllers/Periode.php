<?php

namespace App\Controllers;
use App\Models\ModelPeriode;

class Periode extends BaseController
{
	public function __construct() 
    {
		$this->ModelPeriode = New ModelPeriode();
	}

    public function index()
    {
        $data = array(
            'title' => 'Periode',
            'isi' => 'periode/v_periode',
            'periode'=> $this->ModelPeriode->allData(),
            'page' => 'Periode',
        );
        return view('layout/v_wrapper',$data);
    }

    public function aktivasi($id_periode)
    {
        $this->ModelPeriode->resetStatus();
        $data = [
            'id_periode' => $id_periode,
            'status_periode' => 1
        ];
        $this->ModelPeriode->edit($data);
        session()->setFlashdata('pesan','Periode Telah Di Aktivasi');
        return redirect()->to(base_url('periode'));
    }

}