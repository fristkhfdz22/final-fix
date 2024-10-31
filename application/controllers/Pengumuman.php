<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');
    }

    public function index()
    {
        $data['pengumuman'] = $this->Pengumuman_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/pengumuman/pengumuman_list', $data);
        $this->load->view('admin/footer');
    }


    public function create()
    {

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/pengumuman/pengumuman_form');
            $this->load->view('admin/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'user_id' => $this->session->userdata('user_id')
            ];
            $this->Pengumuman_model->insert_entry($data);
            redirect('pengumuman');
        }
    }


    public function edit($id) {}


    public function delete($id)
    {
        $this->Pengumuman_model->delete_entry($id);
        redirect('pengumuman');
    }
}
