<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritiksaran_model extends CI_Model
{
    protected $table = 'kritiksaran';

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat database
    }

    // Menyimpan kritik dan saran
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Mengambil semua data kritik dan saran
    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function count_all() {
        return $this->db->count_all('kritiksaran');
    }
}
