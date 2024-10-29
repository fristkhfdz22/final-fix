<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
    // Fungsi untuk menyimpan pesan
    public function simpan($data)
    {
        return $this->db->insert('kontak', $data);
    }

    // Fungsi untuk mendapatkan semua kontak
    public function get_all()
    {
        return $this->db->get('kontak')->result(); // Mengembalikan semua data kontak
    }

    // Fungsi untuk mendapatkan kontak berdasarkan ID
    public function get_by_id($id)
    {
        return $this->db->get_where('kontak', ['id' => $id])->row(); // Mengembalikan satu data kontak
    }

    // Fungsi untuk memperbarui data kontak
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kontak', $data);
    }

    // Fungsi untuk menghapus kontak
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('kontak');
    }
    public function count_all() {
        return $this->db->count_all('kontak');
    }
}
