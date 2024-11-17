<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function is_email_registered($email) {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->num_rows() > 0;
    }

    public function get_user_by_email($email) {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row();
    }

    public function save_remember_token($user_id, $token) {
        $data = array(
            'remember_token' => $token
        );
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }

    public function get_user_by_token($token) {
        $query = $this->db->get_where('users', array('remember_token' => $token));
        return $query->row();
    }

    public function clear_remember_token($user_id) {
        $data = array(
            'remember_token' => null
        );
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }
}
