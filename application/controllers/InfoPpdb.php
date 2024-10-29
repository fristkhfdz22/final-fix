<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InfoPpdb extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('InfoPpdb_model');
        $this->load->library('upload');
    }

    // Menampilkan semua data
    public function index() {
        $data['info_ppdb'] = $this->InfoPpdb_model->get_all_info_ppdb();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/infoppdb/info_ppdb_list', $data);
        $this->load->view('admin/footer');
    }
    public function view() {
        $data['info_ppdb'] = $this->InfoPpdb_model->get_all(); // Mengambil semua data
        
        $this->load->view('user/header');
        $this->load->view('user/info_ppdb', $data);
        $this->load->view('user/footer', $data);
    }
    

    // Membuat data baru
    public function create() {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'youtube' => $this->input->post('youtube'),
                'instagram' => $this->input->post('instagram'),
                'facebook' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
                'telegram' => $this->input->post('telegram')
            ];

            // Upload gambar
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $upload_data = $this->upload->data();
                $data['image'] = $upload_data['file_name'];
            }

            $this->InfoPpdb_model->insert($data);
            redirect('InfoPpdb');
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/infoppdb/info_ppdb_form');
        $this->load->view('admin/footer');
    }

    // Mengedit data berdasarkan ID
    public function edit($id) {
        $data['info_ppdb'] = $this->InfoPpdb_model->get_by_id($id);
    
        if ($this->input->post()) {
            $data_update = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'youtube' => $this->input->post('youtube'),
                'instagram' => $this->input->post('instagram'),
                'facebook' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
                'telegram' => $this->input->post('telegram')
            ];
    
            // Upload image if there is a new file
            if ($_FILES['image']['name']) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $data_update['image'] = $upload_data['file_name'];
                }
            }
    
            $this->InfoPpdb_model->update($id, $data_update);
            redirect('InfoPpdb');
        }
    
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/infoppdb/info_ppdb_form', $data);  // Pass data to view
        $this->load->view('admin/footer');
    }
    

    // Menghapus data berdasarkan ID
    public function delete($id) {
        $this->InfoPpdb_model->delete($id);
        redirect('InfoPpdb');
    }
}
