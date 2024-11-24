<?php  

class Signup extends CI_Controller {  
    
    public function __construct() {  
        parent::__construct();  
        $this->load->model('Auth_model');  
        $this->load->library(['session', 'form_validation']);  
        $this->load->helper('url');  
    }  

    public function index() {  
        $data['provinces'] = $this->Auth_model->get_all_provinces();  
        $this->load->view('sign/signup', $data);  
    }  

    public function register() {  
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');  
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');  
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|callback_password_check');  
        $this->form_validation->set_rules('address', 'Address', 'required');  
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');  
        $this->form_validation->set_rules('province', 'Province', 'required');  

        if ($this->form_validation->run() === FALSE) {  
            $this->session->set_flashdata('error', validation_errors());  
            redirect('signup');  
        } else {  
            $full_name = $this->input->post('full_name');  
            $email = $this->input->post('email');  
            $password = $this->input->post('password');  
            $address = $this->input->post('address');  
            $phone_number = $this->input->post('phone_number');  
            $province_id = $this->input->post('province');  

            $user_data = [  
                'full_name' => $full_name,  
                'email' => $email,  
                'password' => $password,  
                'address' => $address,  
                'phone_number' => $phone_number,  
                'province_id' => $province_id,  
                'role' => 'user'  
            ];  

            if ($this->Auth_model->register($user_data)) {  
                $this->session->set_flashdata('success', 'Registration successful. Please log in.');  
                redirect('login');  
            } else {  
                $this->session->set_flashdata('error', 'Registration failed. Please try again.');  
                redirect('signup');  
            }  
        }  
    }  

    public function password_check($password) {  
        if (!preg_match('/[A-Z]/', $password)) {  
            $this->form_validation->set_message('password_check', 'Password must include at least one uppercase letter.');  
            return FALSE;  
        }  
        if (!preg_match('/[a-z]/', $password)) {  
            $this->form_validation->set_message('password_check', 'Password must include at least one lowercase letter.');  
            return FALSE;  
        }  
        if (!preg_match('/\d/', $password)) {  
            $this->form_validation->set_message('password_check', 'Password must include at least one number.');  
            return FALSE;  
        }  
        return TRUE;  
    }  
}