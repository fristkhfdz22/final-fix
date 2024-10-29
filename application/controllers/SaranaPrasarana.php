<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaranaPrasarana extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('SaranaPrasarana_model');
        $this->load->library('form_validation'); // Memastikan form validation dimuat
    }

    // Menampilkan data untuk admin
    public function index() {
        $data['sarana_prasarana'] = $this->SaranaPrasarana_model->get_all();
        $this->load->view('admin/sarana_prasarana/sarana_prasarana_list', $data);
    }

    // Fungsi tambah atau edit data
    public function form($id = NULL) {
        // Jika mengedit, ambil data berdasarkan ID
        if ($id) {
            $data['sarana'] = $this->SaranaPrasarana_model->get_by_id($id);
        }

        // Jika ada data yang dikirim dari form
        if ($this->input->post()) {
            // Aturan validasi
            $this->form_validation->set_rules('nomor', 'Nomor', 'required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
            $this->form_validation->set_rules('kompetensi_keahlian', 'Kompetensi Keahlian', 'required');
            $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer'); // Tambahkan validasi integer

            if ($this->form_validation->run() == FALSE) {
                // Jika validasi gagal, tampilkan form lagi
                $this->load->view('admin/sarana_prasarana/sarana_prasarana_form', isset($data) ? $data : NULL);
            } else {
                // Ambil data dari input form
                $dataInput = [
                    'nomor' => $this->input->post('nomor'),
                    'keterangan' => $this->input->post('keterangan'),
                    'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'),
                    'jumlah' => $this->input->post('jumlah')
                ];

                // Simpan data ke database
                if ($id) {
                    $this->SaranaPrasarana_model->update($id, $dataInput);
                } else {
                    $this->SaranaPrasarana_model->insert($dataInput);
                }
                redirect('saranaprasarana'); // Redirect setelah sukses
            }
        }

        // Tampilkan form
        $this->load->view('admin/sarana_prasarana/sarana_prasarana_form', isset($data) ? $data : NULL);
    }

    // Fungsi hapus data
    public function delete($id) {
        $this->SaranaPrasarana_model->delete($id);
        redirect('saranaprasarana'); // Redirect setelah hapus
    }

    // Fungsi untuk menampilkan data di tampilan user
    public function view() {
        $data['sarana_prasarana'] = $this->SaranaPrasarana_model->get_all();
        $this->load->view('user/sarana_prasarana', $data);
    }
}
