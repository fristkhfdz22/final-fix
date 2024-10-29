<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saranaprasarana extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Saranaprasarana_model');
    }

    // Daftar sarana prasarana untuk admin
    public function index() {
        $data['sarana'] = $this->Saranaprasarana_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('admin/saranaprasarana/saranaprasarana_list', $data);
        $this->load->view('admin/footer');
    }

    // Form untuk menambah sarana prasarana
    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('admin/saranaprasarana/saranaprasarana_form');
        $this->load->view('admin/footer');
    }

    // Proses penambahan sarana prasarana
    public function store() {
        $data = [
            'nama' => $this->input->post('nama'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Saranaprasarana_model->insert($data);
        redirect('saranaprasarana');
    }

    // Form untuk mengedit sarana prasarana
    public function edit($id) {
        $data['sarana'] = $this->Saranaprasarana_model->get_by_id($id);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('admin/saranaprasarana/saranaprasarana_form', $data);
        $this->load->view('admin/footer');;
    }

    // Proses pengeditan sarana prasarana
    public function update($id) {
        $data = [
            'nama' => $this->input->post('nama'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Saranaprasarana_model->update($id, $data);
        redirect('saranaprasarana');
    }

    // Hapus sarana prasarana
    public function delete($id) {
        $this->Saranaprasarana_model->delete($id);
        redirect('saranaprasarana');
    }

    // Daftar sarana prasarana untuk pengguna
    public function view() {
        $data['sarana'] = $this->Saranaprasarana_model->get_all();
        $this->load->view('user/header');
        $this->load->view('user/saranaprasarana', $data);
        $this->load->view('user/footer');
    }
}
