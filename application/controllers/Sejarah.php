<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sejarah_model');
        $this->load->library('upload');
    }

    public function index() {
        $data['sejarah'] = $this->Sejarah_model->get_all();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sejarah/sejarah_list', $data);
        $this->load->view('admin/footer');
    }
    public function view() {
        $data['sejarah'] = $this->Sejarah_model->get_all();
        $this->load->view('user/header'); // Header untuk user
        $this->load->view('user/sejarah_view', $data); // View user untuk sejarah
        $this->load->view('user/footer'); // Footer untuk user
    }
    
    public function create() {
        if ($this->input->post()) {
            $data = [
                'judul' => $this->input->post('judul'),
                'konten' => $this->input->post('konten'),
                'user_id' => $this->session->userdata('user_id')
            ];

            // Proses upload gambar
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data['gambar'] = $upload_data['file_name'];
            }

            $this->Sejarah_model->insert($data);
            redirect('sejarah');
        }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sejarah/sejarah_form');
        $this->load->view('admin/footer');
    }

    public function edit($id) {
        $data['sejarah'] = $this->Sejarah_model->get_by_id($id);
        if ($this->input->post()) {
            $data_update = [
                'judul' => $this->input->post('judul'),
                'konten' => $this->input->post('konten')
            ];

            // Proses upload gambar jika ada
            if ($_FILES['gambar']['name']) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    $data_update['gambar'] = $upload_data['file_name'];
                }
            }

            $this->Sejarah_model->update($id, $data_update);
            redirect('sejarah');
        }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sejarah/sejarah_form', $data);
        $this->load->view('admin/footer');
    }

    public function delete($id) {
        $this->Sejarah_model->delete($id);
        redirect('sejarah');
    }
}
