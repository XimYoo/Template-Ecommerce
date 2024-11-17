<?php 

class Signup extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model'); // Load the Auth_model for authentication tasks
        $this->load->library('session');
        $this->load->helper('url');
    }

    // Display the signup form
    public function index() {
        $this->load->view('sign/signup'); // Loads the signup form view
    }

    // Process the signup form submission
    public function register() {
        // Get input from POST request
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Check if the required fields are filled
        if (empty($name) || empty($email) || empty($password)) {
            $this->session->set_flashdata('error', 'All fields are required.');
            redirect('signup');
        }

        // Check if the email is already registered
        if ($this->Auth_model->is_email_registered($email)) {
            $this->session->set_flashdata('error', 'Email is already registered.');
            redirect('signup');
        }

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the user data for insertion
        $user_data = [
            'name' => $name,
            'email' => $email,
            'password' => $hashed_password
        ];

        // Insert the new user into the database
        if ($this->Auth_model->register($user_data)) {
            $this->session->set_flashdata('success', 'Registration successful. Please log in.');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('signup');
        }
    }
}
