<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritiksaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Kritiksaran_model');
    }

    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/kritiksaran');
        $this->load->view('user/footer');
    }


    public function submit()
    {
        $data = [
            'nama_pengirim' => $this->input->post('nama'),
            'email_pengirim' => $this->input->post('email'),
            'isi_kritik_saran' => $this->input->post('pesan'),
        ];

        $this->Kritiksaran_model->insert($data);


        redirect('');
    }


    public function list()
    {
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');
        $this->load->view('admin/kritiksaran_list', $data);
        $this->load->view('admin/footer');
    }
}
