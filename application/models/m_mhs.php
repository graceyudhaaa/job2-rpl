<?php

class M_mhs extends CI_Model {
    public function get_mahasiswa($keyword = null){
        if ($keyword){
            $this->db->like('nama', $keyword);
        }
        return $this->db->get('tb_mhs')->result_array();
    }

    public function get_kota(){
        $this->db->distinct();
        $this->db->select('kota_asal');
        $this->db->from('tb_mhs');

        return $this->db->get()->result_array();
    }

    public function get_mahasiswa_by_kota($keyword = null){
        if (!($keyword=='null')){
            $this->db->where('kota_asal', $keyword);
        }
        return $this->db->get('tb_mhs')->result_array();
    }
}