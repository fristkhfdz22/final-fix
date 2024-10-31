<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kepalasekolah_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Berita_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Ekstrakurikuler_model');
        $this->load->model('Prestasi_model');
        $this->load->model('Gurustaff_model');
        $this->load->model('Kontak_model');
        $this->load->model('Kritiksaran_model');
        $this->load->model('Stats_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $kepalaSekolahEntries = $this->Kepalasekolah_model->get_all();
        $data['kepalasekolah'] = !empty($kepalaSekolahEntries) ? $kepalaSekolahEntries[0] : null;
        $data['pengumuman'] = $this->Pengumuman_model->get_all();
        $data['berita'] = $this->Berita_model->get_all();
        $data['jurusan'] = $this->Jurusan_model->get_all_jurusan();
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_all_ekstrakurikuler();
        $data['prestasi'] = $this->Prestasi_model->get_all_prestasi();
        $data['gurustaff'] = $this->Gurustaff_model->get_all();
        $data['kontak'] = $this->Kontak_model->get_all();
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        $data['stats'] = $this->Stats_model->get_latest();





        $this->load->view('user/header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('user/info', $data);
        $this->load->view('user/berita', $data);
        $this->load->view('user/jurusan', $data);
        $this->load->view('user/eskul', $data);
        $this->load->view('user/prestasi', $data);
        $this->load->view('user/gurustaff', $data);
        $this->load->view('user/kontak', $data);
        $this->load->view('user/kritiksaran', $data);
        $this->load->view('user/rombel', $data);
        $this->load->view('user/footer', $data);
    }
}
