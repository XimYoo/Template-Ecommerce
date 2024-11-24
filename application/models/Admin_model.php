<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    // Ambil semua user dan nama provinsi terkait
    public function get_users()
    {
        $this->db->select('users.*, provinces.name as province_name'); // Pilih kolom user dan provinsi
        $this->db->from('users');
        $this->db->join('provinces', 'users.province_id = provinces.id', 'left'); // Join ke tabel provinces
        $query = $this->db->get();
        return $query->result_array(); // Kembalikan hasil sebagai array
    }

    // Ambil data user berdasarkan ID
    public function get_user_by_id($user_id)
    {
        $this->db->select('users.*, provinces.name as province_name'); // Ambil data user dan nama provinsi
        $this->db->from('users');
        $this->db->join('provinces', 'users.province_id = provinces.id', 'left'); // Join ke tabel provinces
        $this->db->where('users.user_id', $user_id); // Filter berdasarkan ID user
        $query = $this->db->get();
        return $query->row_array(); // Kembalikan satu baris hasil
    }

    // Tambah user baru
    public function insert_user($data)
    {
        return $this->db->insert('users', $data); // Masukkan data ke tabel users
    }

    // Perbarui data user berdasarkan ID
    public function update_user($user_id, $data)
    {
        $this->db->where('user_id', $user_id); // Tentukan ID user yang akan diperbarui
        return $this->db->update('users', $data); // Perbarui data user
    }

    // Hapus user berdasarkan ID
    public function delete_user($user_id)
    {
        $this->db->where('user_id', $user_id); // Tentukan ID user yang akan dihapus
        return $this->db->delete('users'); // Hapus data user
    }

    // Ambil semua provinsi (jika diperlukan untuk dropdown)
    public function get_provinces()
    {
        $this->db->select('*');
        $this->db->from('provinces'); // Ambil semua data dari tabel provinces
        $query = $this->db->get();
        return $query->result_array(); // Kembalikan hasil sebagai array
    }
}
