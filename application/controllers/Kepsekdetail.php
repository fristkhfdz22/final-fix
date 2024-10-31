<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepsekdetail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kepalasekolah_model');
    }

    public function index()
    {

        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_first();

        $this->load->view('user/header', $data);
        $this->load->view('user/kepsekdetail/detail', $data);
        $this->load->view('user/footer');
    }
}
