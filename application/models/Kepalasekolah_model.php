<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepalasekolah_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $query = $this->db->get('kepalasekolah');
        return $query->result_array();
    }

    public function get_first()
    {

        $query = $this->db->get('kepalasekolah');
        return $query->row_array();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('kepalasekolah', array('id' => $id));
        return $query->row_array();
    }

    public function get_kepalasekolah_message()
    {
        $this->db->where('id', 3);
        $query = $this->db->get('kepalasekolah');
        return $query->row_array();
    }

    public function insert_entry($foto)
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'isisambutan' => $this->input->post('isisambutan'),
            'tanggal' => date('Y-m-d'),
            'foto' => $foto,
            'user_id' => $this->session->userdata('user_id')
        ];
        return $this->db->insert('kepalasekolah', $data);
    }

    public function update_entry($id, $foto = null)
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'isisambutan' => $this->input->post('isisambutan'),
            'tanggal' => date('Y-m-d')
        ];

        if ($foto) {
            $data['foto'] = $foto;
        }
        $this->db->where('id', $id);
        return $this->db->update('kepalasekolah', $data);
    }

    public function delete_entry($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('kepalasekolah');
    }
    public function count_all()
    {
        return $this->db->count_all('kepalasekolah');
    }
}
