<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $this->db->order_by('tanggal_mulai', 'DESC');
        $query = $this->db->get('pengumuman');
        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('pengumuman', ['id' => $id]);
        return $query->row_array();
    }

    public function insert_entry($data)
    {
        $data['create_at'] = date('Y-m-d H:i:s');
        return $this->db->insert('pengumuman', $data);
    }

    public function update_entry($id, $data)
    {
        $data['update_at'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        return $this->db->update('pengumuman', $data);
    }

    public function delete_entry($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('pengumuman');
    }

    public function count_all()
    {
        return $this->db->count_all('pengumuman');
    }
}
