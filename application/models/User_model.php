<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_login($username, $password)
    {
        $this->db->where('username', $username);
        $user = $this->db->get('User')->row();

        if ($user && $user->password === md5($password)) {
            return $user;
        }

        return false;
    }
    public function count_all()
    {
        return $this->db->count_all('user');
    }
}
