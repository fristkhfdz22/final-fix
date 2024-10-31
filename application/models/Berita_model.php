<?php

class Berita_model extends CI_Model
{


    public function get_all()
    {
        $query = $this->db->get('berita');
        return $query->result();
    }
    public function insert_berita($data)
    {
        $this->db->insert('berita', $data);
    }

    public function get_berita_by_id($id)
    {
        $query = $this->db->get_where('berita', ['id' => $id]);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return null;
    }

    public function update_berita($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('berita', $data);
    }

    public function delete_berita($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita');
    }

    public function upload_image()
    {
        $config['upload_path'] = './uploads/berita/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            return $this->upload->data('file_name');
        } else {
            return false;
        }
    }
    public function count_all()
    {
        return $this->db->count_all('berita');
    }
}
