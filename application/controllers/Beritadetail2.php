<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beritadetail2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model'); // Pastikan model Berita_model sudah ada
    }

    // Fungsi untuk menampilkan semua berita di halaman detail
    public function index() {
        $data['berita'] = $this->Berita_model->get_all(); // Mengambil semua data berita
        $this->load->view('user/header', $data);
        $this->load->view('user/berita_detail', $data); // View untuk semua berita
        $this->load->view('user/footer', $data);
    }
}
