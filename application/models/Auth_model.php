<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Auth_model extends CI_Model {  

    public function __construct() {  
        parent::__construct();  
        $this->load->database();  
    }  

    // Function to register a new user with password hashing  
    public function register($data) {  
        // Hash the password before saving  
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);  
        $data['login_attempts'] = 0; // Set login attempts to 0 during registration  
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
        $data = array('remember_token' => $token);  
        $this->db->where('user_id', $user_id); // Ensure correct reference for user_id  
        return $this->db->update('users', $data);  
    }  

    // Get user by remember token  
    public function get_user_by_token($token) {  
        $query = $this->db->get_where('users', array('remember_token' => $token));  
        return $query->row();  
    }  

    // Clear the remember token for a user  
    public function clear_remember_token($user_id) {  
        $data = array('remember_token' => null);  
        $this->db->where('user_id', $user_id); // Ensure correct reference for user_id  
        return $this->db->update('users', $data);  
    }  

    // Get all provinces  
    public function get_all_provinces() {  
        $query = $this->db->get('provinces');  
        return $query->result_array();  
    }  

    // Get user by user_id  
    public function get_user_by_id($user_id) {  
        $query = $this->db->get_where('users', array('user_id' => $user_id));  
        return $query->row();  
    }  

    // Increment login attempts after failed login  
    public function increment_login_attempts($user_id) {  
        $this->db->set('login_attempts', 'login_attempts+1', FALSE);  
        $this->db->where('user_id', $user_id);  
        return $this->db->update('users');  
    }  

    // Reset login attempts after successful login  
    public function reset_login_attempts($user_id) {  
        $this->db->set('login_attempts', 0);  
        $this->db->where('user_id', $user_id);  
        return $this->db->update('users');  
    }  
}