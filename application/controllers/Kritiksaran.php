<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritiksaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat model
        $this->load->model('Kritiksaran_model');
    }

    // Menampilkan form kritik dan saran
    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/kritiksaran');
        $this->load->view('user/footer'); // Form kritik dan saran
    }

    // Menyimpan kritik dan saran
    public function submit()
    {
        $data = [
            'nama_pengirim' => $this->input->post('nama'),
            'email_pengirim' => $this->input->post('email'),
            'isi_kritik_saran' => $this->input->post('pesan'),
        ];
        
        $this->Kritiksaran_model->insert($data);
        
        // Redirect kembali ke halaman utama setelah pesan terkirim
        redirect(''); // ganti 'user' dengan controller tampilan utama Anda
    }
    

    // Menampilkan daftar kritik dan saran untuk admin
    public function list()
    {
        $data['kritiksaran'] = $this->Kritiksaran_model->get_all();
        
        $this->load->view('admin/header'); 
        
        $this->load->view('admin/sidebar'); // Ganti dengan view header admin
        $this->load->view('admin/kritiksaran_list', $data);
        $this->load->view('admin/footer'); // Ganti dengan view footer admin
    }
}
