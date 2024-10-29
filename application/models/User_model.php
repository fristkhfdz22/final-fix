<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk memeriksa login
    public function check_login($username, $password) {
        // Mencari pengguna berdasarkan username
        $this->db->where('username', $username);
        $user = $this->db->get('User')->row(); // Ambil data pengguna

        // Jika pengguna ditemukan, periksa password
        if ($user && $user->password === md5($password)) {
            return $user; // Mengembalikan objek pengguna jika cocok
        }

        return false; // Mengembalikan false jika tidak ada pengguna atau password tidak cocok
    }
    public function count_all() {
        return $this->db->count_all('user');
    }

}
