<?php namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
    public function total_dokumen()
    {
        return $this->db->table('tbl_dokumen')->countAll();
    }

    public function total_komponen()
    {
        return $this->db->table('tbl_komponen')->countAll();
    }

    public function total_subk()
    {
        return $this->db->table('tbl_sub_k')->countAll();
    }

    public function total_user()
    {
        return $this->db->table('tbl_user')->countAll();
    }

}