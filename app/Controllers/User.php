<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ModelDep;

class User extends BaseController
{
    public function __construct(){
        helper('form');
        $this->ModelUser = new ModelUser();
    }

	public function index()
	{
		$data = array(
            'title' => 'User',
            'user' => $this->ModelUser->all_data(),
			'isi' => 'user/v_index',
            'page' =>'User'
		);
		return view('layout/v_wrapper',$data);
    }
    
    public function add()
    {
        $data = array(
            'title' => 'Tambah User',
			'isi' => 'user/v_add',
            'page' =>'User'
		);
		return view('layout/v_wrapper',$data);
    }

    public function insert(){
        if ($this->validate([
            'nama_user' => [
                'label'  => 'Nama User',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'email' => [
                'label'  => 'Email',
                'rules'  => 'required|valid_email|is_unique[tbl_user.email]',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                    'valid_email' => '{field} tidak valid'
                ]
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                    'min_length' => '{field} minimal 8 karakter' 
                ]
            ],
            'level' => [
                'label'  => 'Level',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'foto' => [
                'label'  => 'Foto',
                'rules'  => 'uploaded[foto]|max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} Wajib Diisi',
                    'max_size' => 'Ukuran {field} maksimal 1024 kb',
                    'mime_in' => 'Format file harus jpg,jpeg,png',
                ]
            ],
        ])){
            //mengambil file foto
            $foto = $this->request->getFile('foto');
            //random nama file
            $nama_file = $foto->getRandomName();
            // jika valid
            $data = array(
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'level' => $this->request->getPost('level'),
                'foto' => $nama_file,
            );

            $foto->move('foto',$nama_file); //directory up file
            $this->ModelUser->add($data);
            session()->setFlashdata('pesan','Data berhasil ditambahkan');
            return redirect()->to(base_url('user'));

        }else{
            //jika tidak
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('user/add'));
        }
    }

    public function edit($id_user)
    {
        $data = array(
            'title' => 'Edit User',
            'user' => $this->ModelUser->detail_data($id_user),
			'isi' => 'user/v_edit',
            'page' =>'User'
		);
		return view('layout/v_wrapper',$data);
    }

    public function update($id_user)
    {
        if ($this->validate([
            'nama_user' => [
                'label'  => 'Nama User',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                    'min_length' => '{field} minimal 8 karakter' 
                ]
            ],
            'level' => [
                'label'  => 'Level',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi',
                ]
            ],
            'foto' => [
                'label'  => 'Foto',
                'rules'  => 'max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran {field} maksimal 1024 kb',
                    'mime_in' => 'Format file harus jpg,jpeg,png',
                ]
            ],
        ])){
            //mengambil file foto
            $foto = $this->request->getFile('foto');
            if ($foto->getError() == 4) {
                $data = array(
                    'id_user' => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                    // 'foto' => $nama_file,
                );
    
                // $foto->move('foto',$nama_file); //directory up file
                $this->ModelUser->edit($data);
            } else {
                $user = $this->ModelUser->detail_data($id_user);
                if($user['foto'] != ""){
                    unlink('foto/'.$user['foto']);
                }
                $nama_file = $foto->getRandomName();
                $data = array(
                    'id_user' => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                    'foto' => $nama_file,
                );
    
                $foto->move('foto',$nama_file); //directory up file
                $this->ModelUser->edit($data);
            }

            session()->setFlashdata('pesan','Data berhasil diUpdate');
            return redirect()->to(base_url('user'));

        }else{
            //jika tidak
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('user/edit/'.$id_user));
        }
    }

    public function delete($id_user)
    {
        $user = $this->ModelUser->detail_data($id_user);
                if($user['foto'] != ""){
                    unlink('foto/'.$user['foto']);
                }
        $data = array(
            'id_user' => $id_user
        );
        $this->ModelUser->delete_data($data);
        session()->setFlashdata('pesan','Data berhasil dihapus');
        return redirect()->to(base_url('user'));
    }
}