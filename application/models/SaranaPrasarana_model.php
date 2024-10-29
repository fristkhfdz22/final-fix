<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saranaprasarana_model extends CI_Model {
    private $table = 'sarana_prasarana'; // Nama tabel di database

    // Ambil semua data sarana prasarana
    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    // Tambah sarana prasarana
    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    // Ambil data berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Update sarana prasarana
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Hapus sarana prasarana
    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
