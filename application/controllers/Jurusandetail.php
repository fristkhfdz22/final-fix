<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusandetail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jurusan_model'); // Memuat model jurusan
    }

    // Menampilkan daftar atau detail jurusan
    public function index($id = null) {
        if ($id === null) {
            // Jika ID tidak diberikan, tampilkan daftar jurusan
            $data['jurusan'] = $this->Jurusan_model->get_all_jurusan();
            $this->load->view('user/header');
            $this->load->view('user/kompetensikeahlian', $data);  // View daftar jurusan
            $this->load->view('user/footer');
        } else {
            // Jika ID diberikan, tampilkan detail jurusan
            $data['jurusan'] = $this->Jurusan_model->get_jurusan($id);
            if (!$data['jurusan']) {
                show_404(); // Tampilkan halaman 404 jika data jurusan tidak ditemukan
            }
            $this->load->view('user/header');
            $this->load->view('user/jurusan/detail', $data);  // View detail jurusan
            $this->load->view('user/footer');
        }
    }
}
