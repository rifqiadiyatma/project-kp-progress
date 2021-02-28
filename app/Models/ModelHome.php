<?php namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
    public function total_dokumen()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->countAllResults();
    }

    public function total_verif()
    {
        return $this->db->table('tbl_dokumen')
        ->where('tbl_dokumen.status',1)
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->countAllResults();
    }

    public function total_blmverif()
    {
        return $this->db->table('tbl_dokumen')
        ->where('tbl_dokumen.status',0)
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->countAllResults();
    }

    public function total_user()
    {
        return $this->db->table('tbl_user')->countAll();
    }

    public function total_komponen1()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('id_komponen',1)
        ->where('tbl_periode.status_periode',1)
        ->countAllResults();
    }

    public function total_komponen2()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('id_komponen',2)
        ->countAllResults();
    }

    public function total_komponen3()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('id_komponen',3)
        ->countAllResults();
    }

    public function total_komponen4()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('id_komponen',4)
        ->countAllResults();
    }

    public function total_komponen5()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('id_komponen',5)
        ->countAllResults();
    }

    public function total_komponen6()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_periode','tbl_periode.id_periode = tbl_dokumen.id_periode', 'left')
        ->where('tbl_periode.status_periode',1)
        ->where('id_komponen',6)
        ->countAllResults();
    }

}