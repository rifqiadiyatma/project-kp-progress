<?php

namespace App\Controllers;
use App\Models\ModelUser;

class Profile extends BaseController
{
    public function __construct(){
        helper('form');
        $this->ModelUser = new ModelUser();
    }

    public function index()
    {
        $data = array(
            'title' => 'My Profile',
            'isi' => 'user/v_myprofile',
            'user'=> $this->ModelUser->getProfile(),
            'page' => 'profile',
        );
        return view('layout/v_wrapper',$data);
    }

    public function edit($id_user)
    {
        $user = $this->ModelUser->getProfile();
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
                );
    
                $this->ModelUser->edit($data);
            } else {
                $user = $this->ModelUser->getProfile();
                if($user['foto']!= "avatar5.png"){
                    if($user['foto'] != ""){
                    unlink('foto/'.$user['foto']);
                    }
                }
                $nama_file = $foto->getRandomName();
                $data = array(
                    'id_user' => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'password' => $this->request->getPost('password'),
                    'foto' => $nama_file,
                );
    
                $foto->move('foto',$nama_file); //directory up file
                $this->ModelUser->edit($data);
            }

            session()->setFlashdata('pesan','Data berhasil diUpdate');
            return redirect()->to(base_url('profile'));

        }else{
            //jika tidak
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('profile'));
        }
    }

}