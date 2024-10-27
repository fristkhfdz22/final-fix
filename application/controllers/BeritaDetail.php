<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaDetail extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model'); // pastikan model sudah tersedia
    }

    public function index($id)
    {
        // Ambil data berita berdasarkan ID
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);

        // Jika berita tidak ditemukan, tampilkan halaman 404
        if (!$data['berita']) {
            show_404();
        }

        $this->load->view('user/header', $data);
        $this->load->view('user/beritadetail/detail', $data);
        $this->load->view('user/footer');
    }
}
