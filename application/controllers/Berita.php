<?php
class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    // View all berita
    public function index()
    {
        $data['berita'] = $this->Berita_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/berita/berita_list', $data);
        $this->load->view('admin/footer');
    }


    public function view($id)
    {
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);
        if (empty($data['berita'])) {
            show_404();
        }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/berita/berita', $data);
        $this->load->view('admin/footer');
    }


    public function create()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('img', 'Image', 'callback_handle_image_upload');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/berita/berita_form');
            $this->load->view('admin/footer');
        } else {
            $data = array(
                'judul'   => $this->input->post('judul'),
                'konten'  => $this->input->post('konten'),
                'tanggal' => $this->input->post('tanggal'),
                'penulis' => $this->input->post('penulis'),
                'img'     => $this->upload->data('file_name'), 
                'user_id' => $this->session->userdata('user_id'),
            );
            $this->Berita_model->insert_berita($data);
            redirect('admin/berita');
        }
    }


    public function edit($id)
    {
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);

        if (empty($data['berita'])) {
            show_404();
        }

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/berita/berita_form', $data); 
            $this->load->view('admin/footer');
        } else {
         
            $update_data = array(
                'judul'   => $this->input->post('judul'),
                'konten'  => $this->input->post('konten'),
                'tanggal' => $this->input->post('tanggal'),
                'penulis' => $this->input->post('penulis'),
            );

            if (!empty($_FILES['img']['name'])) {
                $this->load->library('upload');
                $config['upload_path'] = './uploads/'; 
                $config['allowed_types'] = 'gif|jpg|png';
                $this->upload->initialize($config);

                if ($this->upload->do_upload('img')) {
                    $update_data['img'] = $this->upload->data('file_name'); 
                } else {
                   
                    $data['error'] = $this->upload->display_errors();
                }
            }

            $this->Berita_model->update_berita($id, $update_data);
            redirect('admin/berita');
        }
    }

   
    public function handle_image_upload($str)
    {
        if (empty($_FILES['img']['name'])) {
            return true; 
        }

        $this->load->library('upload');
        $config['upload_path'] = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('img')) {
            $this->form_validation->set_message('handle_image_upload', $this->upload->display_errors());
            return false;
        }

        return true; 
    }


    public function delete($id)
    {
        $this->Berita_model->delete_berita($id);
        redirect('admin/berita');
    }

    public function detail_kedua()
    {
        $this->load->model('Berita_model');
        $data['berita'] = $this->Berita_model->get_all();
        $this->load->view('user/header', $data);

        $this->load->view('user/berita_detail', $data);
        $this->load->view('user/footer', $data);
    }
}
