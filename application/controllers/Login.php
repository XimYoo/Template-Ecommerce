<?php 

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form', 'cookie']);
    }

    
    public function index() {
        
        if ($this->input->method() === 'post') {
            
            $email = trim($this->input->post('email'));
            $password = trim($this->input->post('password'));
            $remember = $this->input->post('remember');

            // validasi
            if (empty($email) || empty($password)) {
                $this->session->set_flashdata('error', 'Email and Password are required.');
                $this->session->set_flashdata('email', $email); 
                redirect('login');
            }

            
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            
            $user = $this->Auth_model->get_user_by_email($email);

            if ($user) {
                
                if (password_verify($password, $user->password)) {
                    
                    $this->session->set_userdata([
                        'user_id' => $user->id,
                        'email' => $user->email,
                        'logged_in' => true
                    ]);

                    // cookies
                    if ($remember) {
                        $this->_set_remember_me($user);
                    } else {
                        
                        $this->_clear_remember_me();
                    }

                    // berhasil login gaes
                    redirect(base_url());
                } else {
                    // Invalid password
                    $this->session->set_flashdata('error', 'Invalid password.');
                    $this->session->set_flashdata('email', $email); 
                    redirect('login');
                }
            } else {
                // Invalid email
                $this->session->set_flashdata('error', 'Invalid email.');
                $this->session->set_flashdata('email', $email); // Preserve email for re-render
                redirect('login');
            }
        }

        
        if ($this->_check_remember_me()) {
            
            redirect(base_url());
        }

        
        $this->load->view('sign/login');
    }

    // Logout
    public function logout() {
        $this->session->sess_destroy(); 
        $this->_clear_remember_me();
        redirect('login');
    }

    // Remember me
    private function _set_remember_me($user) {
        // 30 hari
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

        
        $this->Auth_model->save_remember_token($user->id, $token);
    }

    
    private function _check_remember_me() {
        
        $email = get_cookie('remember_email'); 
        $token = get_cookie('remember_token'); 

        if ($email && $token) {
            
            $user = $this->Auth_model->get_user_by_email($email);
            if ($user && $user->remember_token === $token) {
                
                $this->session->set_userdata([
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'logged_in' => true
                ]);
                return true;
            }
        }

        return false;
    }

    
    private function _clear_remember_me() {
        delete_cookie('remember_email'); 
        delete_cookie('remember_token'); 
    }
}
