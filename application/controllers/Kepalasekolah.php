<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepalasekolah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kepalasekolah_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kepalasekolah/kepalasekolah_crud', $data);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isisambutan', 'Isi Sambutan', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/kepalasekolah/kepalasekolah_form');
            $this->load->view('admin/footer');
        } else {
            $upload_image = $this->_upload_image();

            $this->Kepalasekolah_model->insert_entry($upload_image);
            redirect('kepalasekolah');
        }
    }


    public function edit($id)
    {
        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_by_id($id);

        if (empty($data['kepalasekolah'])) {
            show_404();
        }

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isisambutan', 'Isi Sambutan', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/kepalasekolah/kepalasekolah_form', $data);
            $this->load->view('admin/footer');
        } else {

            $upload_image = $this->_upload_image();

            if (!$upload_image) {
                $upload_image = $data['kepalasekolah']['foto'];
            }

            $this->Kepalasekolah_model->update_entry($id, $upload_image);
            redirect('kepalasekolah');
        }
    }


    public function delete($id)
    {
        $this->Kepalasekolah_model->delete_entry($id);
        redirect('kepalasekolah');
    }

    private function _upload_image()
    {
        $config['upload_path'] = './uploads/kepalasekolah/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = uniqid();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        } else {

            $this->session->set_flashdata('error', $this->upload->display_errors());
            return NULL;
        }
    }
}
