<?php namespace App\Models;

use CodeIgniter\Model;

class ModelKomponen extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_komponen')->get()->getResultArray();
    }

    public function getSubK($idKomp)
    {
        return $this->db->table('tbl_sub_k')->where('id_komponen',$idKomp)->get()->getResult();
    }

    public function getSubSubK($idSubKomp)
    {
        return $this->db->table('tbl_sub_sub_k')->where('id_sub_k',$idSubKomp)->get()->getResult();
    }
}