<?php

namespace App\Controllers;
use App\Models\ModelDokumen;
use App\Models\ModelKomponen;

class Dokumen extends BaseController
{
    public function __construct(){
        helper('form');
        helper('text');
        $this->ModelDokumen = new ModelDokumen();
        $this->ModelKomponen = new ModelKomponen();
    }

	public function index()
	{
		$data = array(
            'title' => 'Dokumen',
            'dokumen' => $this->ModelDokumen->all_data(),
			'isi' => 'dokumen/v_index',
            'page' => 'dokumen'
		);
		return view('layout/v_wrapper',$data);
	}

    public function add()
	{
		$data = array(
            'title' => 'Tambah Dokumen',
            'komponen' => $this->ModelKomponen->all_data(),
			'isi' => 'dokumen/v_add',
            'page' => 'add dokumen'
		);
		return view('layout/v_wrapper',$data);
	}

    public function getSub()
    {
        $id_komponen = $this->request->getPost('id');
        $data = $this->ModelKomponen->getSubK($id_komponen);
        echo json_encode($data);   
    }

    public function getSubSub()
    {
        $id_sub_komponen = $this->request->getPost('id_sub');
        $data = $this->ModelKomponen->getSubSubK($id_sub_komponen);
        echo json_encode($data);   
    }

    public function insert()
	{
        if ($this->validate([
            'deskripsi' => [
                'label'  => 'Deskripsi',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'nama_dokumen' => [
                'label'  => 'File Dokumen',
                'rules'  => 'uploaded[nama_dokumen]|max_size[nama_dokumen,2048]|ext_in[nama_dokumen,pdf,jpg,doc,xls,xlsx,jpeg,png,docx]',
                'errors' => [
                    'upload' => '{field} Wajib Diisi',
                    'max_size' => 'Ukuran {field} maksimal 2048 kb'
                ]
            ],
            'id_komponen' => [
                'label'  => 'Komponen',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'id_sub_k' => [
                'label'  => 'Sub Komponen',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'id_sub_sub_k' => [
                'label'  => 'Sub Sub Komponen',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
        ])){
            //mengambil file
            $nama_dokumen = $this->request->getFile('nama_dokumen');
            //random nama file
            $nama_file = $nama_dokumen->getName();
            $nama_filebaru = '[BPS-'.date('md').random_string('alnum',2).'] '.$nama_file;
            //ukuran file
            $ukuran_dokumen = $nama_dokumen->getSize('mb');
            // jika valid
            $data = array(
                'deskripsi' => $this->request->getPost('deskripsi'),
                'tgl_upload' => date('Y-m-d'),
                'id_user' => session()->get('id_user'),
                'nama_dokumen' => $nama_filebaru,
                'ukuran_dokumen' => $ukuran_dokumen,
                'id_komponen' => $this->request->getPost('id_komponen'),
                'id_sub_k' => $this->request->getPost('id_sub_k'),
                'id_sub_sub_k' => $this->request->getPost('id_sub_sub_k')
            );

            $nama_dokumen->move('file_dokumen',$nama_filebaru); //directory up file
            $this->ModelDokumen->add($data);
            session()->setFlashdata('pesan','Data berhasil ditambahkan');
            return redirect()->to(base_url('dokumen'));

        }else{
            //jika tidak
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('dokumen/add'));
        }
	}

    public function edit($id_dokumen)
	{
		$data = array(
            'title' => 'Edit Dokumen',
            'komponen' => $this->ModelKomponen->all_data(),
            'dokumen' => $this->ModelDokumen->detail_data($id_dokumen),
			'isi' => 'dokumen/v_edit',
            'page' => 'dokumen',
		);
		return view('layout/v_wrapper',$data);
	}

    public function update($id_dokumen)
    {
        if ($this->validate([
            'deskripsi' => [
                'label'  => 'Deskripsi',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'nama_dokumen' => [
                'label'  => 'File Dokumen',
                'rules'  => 'max_size[nama_dokumen,2048]|ext_in[nama_dokumen,pdf,doc,jpg,xls,xlsx,jpeg,png,docx]',
                'errors' => [
                    'max_size' => 'Ukuran {field} maksimal 2048 kb'
                ]
            ],
            'id_komponen' => [
                'label'  => 'Komponen',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'id_sub_k' => [
                'label'  => 'Sub Komponen',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'id_sub_sub_k' => [
                'label'  => 'Sub Sub Komponen',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
        ])){
            //mengambil file dokumen
            $nama_dokumen = $this->request->getFile('nama_dokumen');
            if ($nama_dokumen->getError()==4) {
                $data = array(
                    'id_dokumen' => $id_dokumen,
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'id_user' => session()->get('id_user'),
                    'id_komponen' => $this->request->getPost('id_komponen'),
                    'id_sub_k' => $this->request->getPost('id_sub_k'),
                    'id_sub_sub_k' => $this->request->getPost('id_sub_sub_k')
                );
                $this->ModelDokumen->edit($data);
            } else {
                $dokumen = $this->ModelDokumen->detail_data($id_dokumen);
                if($dokumen['nama_dokumen'] != ""){
                    unlink('file_dokumen/'.$dokumen['nama_dokumen']);
                }
                $nama_file = $nama_dokumen->getName();
                $nama_filebaru = '[BPS-'.date('md').random_string('alnum',2).'] '.$nama_file;
                $ukuran_dokumen = $nama_dokumen->getSize('mb');
                $data = array(
                    'id_dokumen' => $id_dokumen,
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'id_user' => session()->get('id_user'),
                    'nama_dokumen' => $nama_filebaru,
                    'ukuran_dokumen' => $ukuran_dokumen,
                    'id_komponen' => $this->request->getPost('id_komponen'),
                    'id_sub_k' => $this->request->getPost('id_sub_k'),
                    'id_sub_sub_k' => $this->request->getPost('id_sub_sub_k')
                );
    
                $nama_dokumen->move('file_dokumen',$nama_filebaru); //directory up file
                $this->ModelDokumen->edit($data);
            }

            session()->setFlashdata('pesan','Data berhasil diUpdate');
            return redirect()->to(base_url('dokumen'));

        }else{
            //jika tidak
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('dokumen/edit/'.$id_dokumen));
        }
    }

    public function delete($id_dokumen)
    {
        $dokumen = $this->ModelDokumen->detail_data($id_dokumen);
                if($dokumen['nama_dokumen'] != ""){
                    unlink('file_dokumen/'.$dokumen['nama_dokumen']);
                }
        $data = array(
            'id_dokumen' => $id_dokumen
        );
        $this->ModelDokumen->delete_data($data);
        session()->setFlashdata('pesan','Data berhasil dihapus');
        return redirect()->back();
    }

    public function viewpdf($id_dokumen)
    {
        $data = array(
            'title' => 'View Dokumen',
            'dokumen' => $this->ModelDokumen->detail_data($id_dokumen),
			'isi' => 'dokumen/v_viewpdf',
            'page' => 'dokumen'
		);
		return view('layout/v_wrapper',$data);
    }

    public function verifikasi($id_dokumen)
    {
        $data = array(
            'id_dokumen' => $id_dokumen,
            'status' => 1,
        );
        $this->ModelDokumen->edit($data);
        session()->setFlashdata('pesan','File Berhasil Diverifikasi');
        return redirect()->back();
    }
}
