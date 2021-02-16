<?php namespace App\Models;

use CodeIgniter\Model;

class ModelDokumen extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->orderBy('id_dokumen','DESC')->get()->getResultArray();
    }

    public function detail_data($id_dokumen)
    {
        return $this->db->table('tbl_dokumen')
        ->join('tbl_komponen','tbl_komponen.id_komponen = tbl_dokumen.id_komponen', 'left')
        ->join('tbl_user','tbl_user.id_user = tbl_dokumen.id_user', 'left')
        ->join('tbl_sub_k','tbl_sub_k.id_sub_k = tbl_dokumen.id_sub_k', 'left')
        ->join('tbl_sub_sub_k','tbl_sub_sub_k.id_sub_sub_k = tbl_dokumen.id_sub_sub_k', 'left')
        ->where('id_dokumen',$id_dokumen)->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_dokumen')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_dokumen')->where('id_dokumen',$data['id_dokumen'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_dokumen')->where('id_dokumen',$data['id_dokumen'])->delete($data);
    }
}