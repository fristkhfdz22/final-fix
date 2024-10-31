<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stats extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stats_model');
    }

    public function index()
    {
        $data['stats'] = $this->Stats_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('admin/stats/stats_list', $data);

        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/stats/stats_form');
        $this->load->view('admin/footer');
    }

    public function store()
    {
        $data = [
            'jumlah_siswa' => $this->input->post('jumlah_siswa'),
            'rombongan_belajar' => $this->input->post('rombongan_belajar'),
            'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'),
        ];
        $this->Stats_model->insert($data);
        redirect('stats');
    }

    public function edit($id)
    {
        $data['stat'] = $this->Stats_model->get_by_id($id);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/stats/stats_form', $data);
        $this->load->view('admin/footer');
    }

    public function update($id)
    {
        $data = [
            'jumlah_siswa' => $this->input->post('jumlah_siswa'),
            'rombongan_belajar' => $this->input->post('rombongan_belajar'),
            'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'),
        ];
        $this->Stats_model->update($id, $data);
        redirect('stats');
    }

    public function delete($id)
    {
        $this->Stats_model->delete($id);
        redirect('stats');
    }
}
