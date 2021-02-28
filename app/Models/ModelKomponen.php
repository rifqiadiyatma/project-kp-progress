<?php namespace App\Models;

use CodeIgniter\Model;

class ModelKomponen extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_komponen')->get()->getResultArray();
    }

    public function get_komponen1()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('tbl_dokumen.id_komponen',1)
        ->orderBy('id_dokumen','DESC')->get()->getResultArray();
    
    }
    public function get_komponen2()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('tbl_dokumen.id_komponen',2)
        ->orderBy('id_dokumen','DESC')->get()->getResultArray();
    
    }
    public function get_komponen3()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('tbl_dokumen.id_komponen',3)
        ->orderBy('id_dokumen','DESC')->get()->getResultArray();
    
    }
    public function get_komponen4()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('tbl_dokumen.id_komponen',4)
        ->orderBy('id_dokumen','DESC')->get()->getResultArray();
    
    }
    public function get_komponen5()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('tbl_dokumen.id_komponen',5)
        ->orderBy('id_dokumen','DESC')->get()->getResultArray();
    
    }
    public function get_komponen6()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('tbl_dokumen.id_komponen',6)
        ->orderBy('id_dokumen','DESC')->get()->getResultArray();
    
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