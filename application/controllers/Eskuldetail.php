<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EskulDetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ekstrakurikuler_model');
    }

    public function index($id)
    {

        $data['eskul'] = $this->Ekstrakurikuler_model->get_eskul_by_id($id);

        if (empty($data['eskul'])) {
            show_404();
        }


        $this->load->view('user/header', $data);
        $this->load->view('user/eskuldetail/eskuldetail', $data);
        $this->load->view('user/footer');
    }
}
