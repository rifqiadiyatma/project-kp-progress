<?php namespace App\Models;

use CodeIgniter\Model;

class ModelMaster extends Model
{
    public function allDataPilar()
    {
        return $this->db->table('tbl_komponen')->get()->getResultArray();
    }

    public function allDataKomponen()
    {
        return $this->db->table('tbl_sub_k')->orderBy('id_sub_k','DESC')->get()->getResultArray();
    }

    public function allDataSubKomponen()
    {
        return $this->db->table('tbl_sub_sub_k')->orderBy('id_sub_sub_k','DESC')->get()->getResultArray();
    }

    public function allDataKelengkapan()
    {
        return $this->db->table('tbl_kelengkapan')->orderBy('id_kelengkapan','DESC')->get()->getResultArray();
    }

    public function addKomponen($data)
    {
        $this->db->table('tbl_sub_k')->insert($data);
    }

    public function addSubKomponen($data)
    {
        $this->db->table('tbl_sub_sub_k')->insert($data);
    }

    public function addJDokumen($data)
    {
        $this->db->table('tbl_kelengkapan')->insert($data);
    }
}