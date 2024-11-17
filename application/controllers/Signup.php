<?php 

class Signup extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model'); // Model untuk otentikasi dan data pengguna
        $this->load->library('session');
        $this->load->helper('url');
    }

    // Menampilkan form signup
    public function index() {
        // Ambil data provinsi dari tabel `provinces`
        $data['provinces'] = $this->Auth_model->get_all_provinces();
        
        // Load view signup dengan data provinsi
        $this->load->view('sign/signup', $data);
    }

    // Proses form signup
    public function register() {
        // Ambil input dari form
        $full_name = $this->input->post('full_name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('phone_number');
        $province_id = $this->input->post('province');

        // Validasi input wajib
        if (empty($full_name) || empty($email) || empty($password) || empty($province_id) || empty($address) || empty($phone_number)) {
            $this->session->set_flashdata('error', 'All fields are required.');
            redirect('signup');
        }

        // Validasi email
        if ($this->Auth_model->is_email_registered($email)) {
            $this->session->set_flashdata('error', 'Email is already registered.');
            redirect('signup');
        }

        // Hash password sebelum disimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Data pengguna untuk disimpan ke database
        $user_data = [
            'full_name' => $full_name,
            'email' => $email,
            'password' => $hashed_password,
            'address' => $address,
            'phone_number' => $phone_number,
            'province_id' => $province_id
        ];

        // Simpan pengguna baru ke database
        if ($this->Auth_model->register($user_data)) {
            $this->session->set_flashdata('success', 'Registration successful. Please log in.');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('signup');
        }
    }
}
