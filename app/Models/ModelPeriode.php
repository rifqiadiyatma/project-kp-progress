<?php namespace App\Models;

use CodeIgniter\Model;

class ModelPeriode extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_periode')->get()->getResultArray();
    }

    public function edit($data)
    {
        $this->db->table('tbl_periode')->where('id_periode',$data['id_periode'])->update($data);
    }

    public function resetStatus()
    {
        $this->db->table('tbl_periode')->update(['status_periode' => 0]);
    }
}