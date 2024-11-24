<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login extends CI_Controller {  

    public function __construct() {  
        parent::__construct();  
        $this->load->model('Auth_model');  
        $this->load->library(['session', 'form_validation']);  
        $this->load->helper(['url', 'form', 'cookie']);  
    }  

    public function index() {  
        if ($this->input->method() === 'post') {  
            // Set form validation rules  
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');  
            $this->form_validation->set_rules('password', 'Password', 'required');  

            if ($this->form_validation->run() === FALSE) {  
                $this->session->set_flashdata('error', validation_errors());  
                $this->session->set_flashdata('email', $this->input->post('email'));  
                redirect('login');  
            } else {  
                $email = $this->input->post('email');  
                $password = $this->input->post('password');  
                $remember = $this->input->post('remember');  

                // Check if the email exists  
                $user = $this->Auth_model->get_user_by_email($email);  

                if ($user) {  
                    // Verify password  
                    if (password_verify($password, $user->password)) {  
                        // Reset login attempts after successful login  
                        $this->Auth_model->reset_login_attempts($user->user_id);  

                        // Store user info in session  
                        $this->session->set_userdata([  
                            'user_id' => $user->user_id,  
                            'email' => $user->email,  
                            'role' => $user->role,  // Store role to identify admin or user  
                            'name' => $user->full_name, // Store the admin's name in session  
                            'logged_in' => true  
                        ]);  

                        // Set cookies for remember me functionality  
                        if ($remember) {  
                            $this->_set_remember_me($user);  
                        } else {  
                            $this->_clear_remember_me();  
                        }  

                        // Check user role and redirect accordingly  
                        if ($user->role === 'admin') {  
                            redirect('admin/dashboard');  // Redirect to admin dashboard  
                        } else {  
                            redirect('home');  // Redirect to home for normal users  
                        }  
                    } else {  
                        $this->Auth_model->increment_login_attempts($user->user_id);  
                        $this->session->set_flashdata('error', 'Invalid email or password.');  
                        $this->session->set_flashdata('email', $email);  
                        redirect('login');  
                    }  
                } else {  
                    $this->session->set_flashdata('error', 'Invalid email.');  
                    $this->session->set_flashdata('email', $email);  
                    redirect('login');  
                }  
            }  
        }  

        $this->load->view('sign/login');  
    }  

    public function logout() {  
        $this->session->sess_destroy();  
        $this->_clear_remember_me();  
        redirect('login');  
    }  

    private function _set_remember_me($user) {  
        // Set cookies for email and token  
        $cookie_email = array(  
            'name'   => 'remember_email',  
            'value'  => $user->email,  
            'expire' => 60 * 60 * 24 * 30,  
            'secure' => TRUE  
        );  

        $token = bin2hex(random_bytes(16));  
        $cookie_token = array(  
            'name'   => 'remember_token',  
            'value'  => $token,  
            'expire' => 60 * 60 * 24 * 30,  
            'secure' => TRUE  
        );  

        set_cookie($cookie_email);  
        set_cookie($cookie_token);  

        // Save remember token hash in the database  
        $token_hash = hash('sha256', $token);  
        $this->Auth_model->save_remember_token($user->user_id, $token_hash);  
    }  

    private function _clear_remember_me() {  
        delete_cookie('remember_email');  
        delete_cookie('remember_token');  
    }  
}