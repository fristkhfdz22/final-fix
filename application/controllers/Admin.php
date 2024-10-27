<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
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
