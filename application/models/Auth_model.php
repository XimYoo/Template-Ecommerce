<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Function to register a new user
    public function register($data) {
        return $this->db->insert('users', $data);
    }

    // Check if an email is already registered
    public function is_email_registered($email) {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->num_rows() > 0;
    }

    // Get user details by email
    public function get_user_by_email($email) {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row();
    }

    // Save a remember token for the user
    public function save_remember_token($user_id, $token) {
        $data = array(
            'remember_token' => $token
        );
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }

    // Get user by remember token
    public function get_user_by_token($token) {
        $query = $this->db->get_where('users', array('remember_token' => $token));
        return $query->row();
    }

    // Clear the remember token for a user
    public function clear_remember_token($user_id) {
        $data = array(
            'remember_token' => null
        );
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }

    // Get all provinces
    public function get_all_provinces() {
        $query = $this->db->get('provinces');
        return $query->result_array();
    }
}
