<?php

class Halaman1 extends CI_Controller{
    public function index() {
        $this->load->model('m_mhs');
        $data['kota'] = $this->m_mhs->get_kota();

        if ($this->input->post('submit')){
            $data['keyword'] = $this->input->post('kota');
            $data['mahasiswa']=$this->m_mhs->get_mahasiswa_by_kota($data['keyword']);
        } else{

            $data['mahasiswa']=$this->m_mhs->get_mahasiswa();
        }
    

        $this->load->view('template/header');
        $this->load->view('halaman1/v_halaman1', $data);
        $this->load->view('template/footer');
    }
}