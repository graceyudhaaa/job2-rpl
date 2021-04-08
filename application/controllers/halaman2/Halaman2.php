<?php

class Halaman2 extends CI_Controller{
    public function index() {
        $this->load->model('m_mhs');
        if ($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
            $data['mahasiswa']=$this->m_mhs->get_mahasiswa($data['keyword']);
        } else{

            $data['mahasiswa']=$this->m_mhs->get_mahasiswa();
        }
    

        $this->load->view('template/header');
        $this->load->view('halaman2/v_halaman2', $data);
        $this->load->view('template/footer');
    }
}