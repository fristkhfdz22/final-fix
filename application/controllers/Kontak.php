<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_model');
    }

    public function index()
    {
        $data['kontak'] = $this->Kontak_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kontak/kontak_list', $data);
        $this->load->view('admin/footer');

    }

    public function edit($id)
    {
        $data['kontak'] = $this->Kontak_model->get_by_id($id);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kontak/kontak_form', $data);
        $this->load->view('admin/footer');

    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'maps_url' => $this->input->post('maps_url'),
            'update_at' => date('Y-m-d H:i:s'),
        );
        $this->Kontak_model->update($id, $data);
        redirect('kontak');
    }

    public function delete($id)
    {
        $this->Kontak_model->delete($id);
        redirect('kontak');
    }

    public function add()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kontak/kontak_form');
        $this->load->view('admin/footer');

    }

    public function save()
    {
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'maps_url' => $this->input->post('maps_url'),
            'create_at' => date('Y-m-d H:i:s'),
        );
        $this->Kontak_model->simpan($data);
        redirect('kontak');
    }
}
