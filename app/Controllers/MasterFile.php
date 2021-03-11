<?php

namespace App\Controllers;
use App\Models\ModelMaster;

class MasterFile extends BaseController
{
    public function __construct() 
    {
        helper('form');
        $this->ModelMaster = new ModelMaster();
	}

    public function index()
    {
        return redirect()->to(base_url());
    }

    public function komponen()
    {
        $data = array(
            'title' => 'Master File Komponen',
            'isi' => 'masterfile/v_masterkomponen',
            'page' => 'MasterK',
            'pilar' => $this->ModelMaster->allDataPilar(),
            'komponen' => $this->ModelMaster->allDataKomponen(),

        );
        return view('layout/v_wrapper',$data);
    }

    public function subkomponen()
    {
        $data = array(
            'title' => 'Master File Sub Komponen',
            'isi' => 'masterfile/v_mastersubkomp',
            'page' => 'MasterS',
            'komponen' => $this->ModelMaster->allDataKomponen(),
            'subkomponen' => $this->ModelMaster->allDataSubKomponen(),


        );
        return view('layout/v_wrapper',$data);
    }

    public function dokumen()
    {
        $data = array(
            'title' => 'Master File Dokumen',
            'isi' => 'masterfile/v_masterdokumen',
            'page' => 'MasterD',
            'subkomponen' => $this->ModelMaster->allDataSubKomponen(),
            'kelengkapan' => $this->ModelMaster->allDataKelengkapan()

        );
        return view('layout/v_wrapper',$data);
    }

    public function addKomponen()
    {
        $data = array(
            'id_komponen' => $this->request->getPost('id_komponen'),
            'nama_sub_k' => $this->request->getPost('nama_sub_k'),
        );
        $this->ModelMaster->addKomponen($data);
        session()->setFlashdata('pesan','Data berhasil ditambahkan');
        return redirect()->to(base_url('masterfile/komponen'));
    }

    public function addSubKomp()
    {
        $data = array(
            'id_sub_k' => $this->request->getPost('id_sub_k'),
            'nama_sub_sub_k' => $this->request->getPost('nama_sub_sub_k'),
        );
        $this->ModelMaster->addSubKomponen($data);
        session()->setFlashdata('pesan','Data berhasil ditambahkan');
        return redirect()->to(base_url('masterfile/subkomponen'));
    }

    public function addDok()
    {
        $data = array(
            'id_sub_sub_k' => $this->request->getPost('id_sub_sub_k'),
            'nama_kelengkapan' => $this->request->getPost('nama_kelengkapan'),
        );
        $this->ModelMaster->addJDokumen($data);
        session()->setFlashdata('pesan','Data berhasil ditambahkan');
        return redirect()->to(base_url('masterfile/dokumen'));
    }
}