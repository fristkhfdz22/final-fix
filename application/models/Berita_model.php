<?php

class Berita_model extends CI_Model {

    // Get all berita
    // Fungsi untuk mengambil semua berita
    public function get_all() {
        $query = $this->db->get('berita'); // Ganti 'berita' dengan nama tabel yang sesuai
        return $query->result();
    }
    // Insert new berita
    public function insert_berita($data) {
        $this->db->insert('berita', $data); // Insert new berita record
    }

    // Get berita by ID
    public function get_berita_by_id($id)
    {
        $query = $this->db->get_where('berita', ['id' => $id]);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return null;
    }
    
    // Update berita
    public function update_berita($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('berita', $data); // Update berita record by ID
    }

    // Soft delete berita
    public function delete_berita($id) {
        // You can implement a soft delete here if you want to retain records in the database
        $this->db->where('id', $id);
        $this->db->delete('berita'); // Perform actual deletion
    }

    // Handle image upload
    public function upload_image() {
        $config['upload_path'] = './uploads/berita/'; // Define the upload path
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Allowed file types
        $config['max_size'] = 2048; // Maximum size in KB (2MB)

        $this->load->library('upload', $config); // Load the upload library

        if ($this->upload->do_upload('img')) {
            return $this->upload->data('file_name'); // Return the file name on success
        } else {
            return false; // Return false if upload fails
        }
    }
}
?>
