<?php

namespace App\Controllers;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct(){
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }
	public function index()
	{
		$data = array(
			'title' => 'Login',
		);
		return view('v_login',$data);
    }

    
    public function login()
	{
        if ($this->validate([
            'email' => [
                'label'  => 'Email',
                'rules'  => 'required|valid_email',
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
            ]
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->ModelAuth->login($email,$password);
            if($cek){
                session()->set('log',true);
                session()->set('id_user',$cek['id_user']);
                session()->set('nama_user',$cek['nama_user']);
                session()->set('email',$cek['email']);
                session()->set('level',$cek['level']);
                session()->set('foto',$cek['foto']);
                return redirect()->to(base_url('home/index'));
            }else{
                session()->setFlashdata('pesan','Email atau Password Salah!!!');
                return redirect()->to(base_url('auth/index'));
            }
        }
         else {
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/index'));
        }
    }

    public function logout(){
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('level');
        session()->remove('foto');

        session()->setFlashdata('pesanlogout','Anda telah logout');
        return redirect()->to(base_url('auth/index'));
    }


}