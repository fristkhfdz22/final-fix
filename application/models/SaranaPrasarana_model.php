<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaranaPrasarana_model extends CI_Model {

    public function get_all() {
        return $this->db->get('sarana_prasarana')->result();
    }

    public function insert($data) {
        return $this->db->insert('sarana_prasarana', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('sarana_prasarana', ['id' => $id])->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('sarana_prasarana', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('sarana_prasarana');
    }
}
