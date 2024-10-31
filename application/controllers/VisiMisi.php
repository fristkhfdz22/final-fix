<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisiMisi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VisiMisi_model');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['visi_misi'] = $this->VisiMisi_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/visimisi/visi_misi_list', $data);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'user_id' => $this->session->userdata('user_id')
            ];

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data['gambar'] = $upload_data['file_name'];
            }

            $this->VisiMisi_model->insert($data);
            redirect('visimisi');
        }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/visimisi/visi_misi_form');
        $this->load->view('admin/footer');
    }
    public function user_view()
    {
        $data['visi_misi'] = $this->VisiMisi_model->get_all();
        $this->load->view('user/header');
        $this->load->view('user/visi_misi', $data);
        $this->load->view('user/footer');
    }

    public function edit($id)
    {
        $data['visi_misi'] = $this->VisiMisi_model->get_by_id($id);
        if ($this->input->post()) {
            $data_update = [
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
            ];

            if ($_FILES['gambar']['name']) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    $data_update['gambar'] = $upload_data['file_name'];
                }
            }

            $this->VisiMisi_model->update($id, $data_update);
            redirect('visimisi');
        }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/visimisi/visi_misi_form', $data);
        $this->load->view('admin/footer');
    }

    public function delete($id)
    {
        $this->VisiMisi_model->delete($id);
        redirect('visimisi');
    }
}
