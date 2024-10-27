<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InfoPpdb_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Method untuk mendapatkan semua data Info PPDB
    public function get_all_info_ppdb() {
        return $this->db->get('info_ppdb')->result(); // Ganti 'info_ppdb' dengan nama tabel Anda
    }

    // Method baru untuk mendapatkan semua data
    public function get_all() {
        return $this->db->get('info_ppdb')->result(); // Mengambil semua data dari tabel
    }

    // Method lainnya sesuai kebutuhan
    public function insert($data) {
        return $this->db->insert('info_ppdb', $data);
    }

    public function update($id, $data) {
        return $this->db->update('info_ppdb', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('info_ppdb', ['id' => $id]);
    }

    public function get_by_id($id) {
        return $this->db->get_where('info_ppdb', ['id' => $id])->row(); // Mengambil data berdasarkan ID
    }
}
