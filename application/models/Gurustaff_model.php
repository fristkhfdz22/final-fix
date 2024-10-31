<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gurustaff_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('gurustaff')->result();
    }
    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('gurustaff');
        return $query->row();
    }

    public function create($data)
    {
        return $this->db->insert('gurustaff', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('gurustaff', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('gurustaff', array('id' => $id));
    }
    public function count_all()
    {
        return $this->db->count_all('gurustaff');
    }
}
