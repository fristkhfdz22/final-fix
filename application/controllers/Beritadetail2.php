<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beritadetail2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }


    public function index()
    {
        $data['berita'] = $this->Berita_model->get_all();
        $this->load->view('user/header', $data);
        $this->load->view('user/berita_detail', $data);
        $this->load->view('user/footer', $data);
    }
}
