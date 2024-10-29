<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Berita_model');
        $this->load->model('Ekstrakurikuler_model');
        $this->load->model('Galeri_model');
        $this->load->model('Gurustaff_model');
        $this->load->model('InfoPpdb_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Kepalasekolah_model');
        $this->load->model('Kontak_model');
        $this->load->model('Kritiksaran_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Prestasi_model');
        $this->load->model('Sejarah_model');
        $this->load->model('Stats_model');
        $this->load->model('VisiMisi_model');
        $this->load->helper('url'); // Memuat helper URL
    }

    public function login() {
        $this->load->view('admin/login'); // Load the login view
    }

    public function auth() {
        // Ambil input dari form
        $username = trim($this->input->post('username'));
        $password = trim($this->input->post('password'));

        // Cek kredensial
        $user = $this->User_model->check_login($username, $password);
        
        if ($user) {
            // Set session data
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('username', $user->username); // Simpan username dalam session
            redirect('admin/dashboard'); // Redirect ke dashboard admin
        } else {
            $data['error'] = 'Username atau password salah.';
            $this->load->view('admin/login', $data); // Reload login view dengan error
        }
    }

    public function dashboard() {
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect ke login jika tidak login
        }

        // Ambil username dari session
        $data['username'] = $this->session->userdata('username');

        $data['total_berita'] = $this->Berita_model->count_all();
        $data['total_ekstrakurikuler'] = $this->Ekstrakurikuler_model->count_all();
        $data['total_galeri'] = $this->Galeri_model->count_all();
        $data['total_gurustaff'] = $this->Gurustaff_model->count_all();
        $data['total_info_ppdb'] = $this->InfoPpdb_model->count_all();
        $data['total_jurusan'] = $this->Jurusan_model->count_all();
        $data['total_kepalasekolah'] = $this->Kepalasekolah_model->count_all();
        $data['total_kontak'] = $this->Kontak_model->count_all();
        $data['total_kritiksaran'] = $this->Kritiksaran_model->count_all();
        $data['total_pengumuman'] = $this->Pengumuman_model->count_all();
        $data['total_prestasi'] = $this->Prestasi_model->count_all();
        $data['total_sejarah'] = $this->Sejarah_model->count_all();
        $data['total_stats'] = $this->Stats_model->count_all();
        $data['total_visi_misi'] = $this->VisiMisi_model->count_all();

        // Muat tampilan dashboard
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer', $data);
    }

    public function logout() {
        $this->session->sess_destroy(); // Hancurkan session
        redirect('admin/login'); // Redirect ke halaman login
    }
}
