<?php

namespace App\Controllers;


class Panduan extends BaseController
{
	public function __construct() 
    {

	}

    public function index()
    {
        $data = array(
            'title' => 'Panduan',
            'isi' => 'v_panduan',
            'page' => 'Panduan',
        );
        return view('layout/v_wrapper',$data);
    }
}