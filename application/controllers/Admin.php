<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');

        // Load session library to manage session data
        $this->load->library('session');
        $this->load->library('form_validation');

        // Check if the user is logged in and if the role is admin
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'admin') {
            // Redirect to login if the user is not logged in or not an admin
            redirect('login');
        }
    }

    public function dashboard()
    {
        // Admin Dashboard page
        $this->load->view('admin/header');  // Load the header view
        $this->load->view('admin/dashboard');  // Load the dashboard view
        // $this->load->view('admin/sidebar');
    }

    // You can add other methods like for User, Product, Pages, etc.
    public function user()
    {
        // Ambil data user dari model
        $data['users'] = $this->Admin_model->get_users();

        // Load tampilan dengan data user
        $this->load->view('admin/header');   // Header tetap ada
        $this->load->view('admin/user', $data);  // Tambahkan view untuk users
    }
    public function create_user()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
            $this->form_validation->set_rules('province_name', 'Province', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');

            if ($this->form_validation->run()) {
                $user_data = [
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                    'province_name' => $this->input->post('province_name'),
                    'role' => $this->input->post('role'),
                    'created_at' => date('Y-m-d H:i:s'),
                ];
                $this->Admin_model->insert_user($user_data);
                $this->session->set_flashdata('success', 'User created successfully.');
                redirect('admin/user');
            }
        }
        $data['provinces'] = $this->Admin_model->get_provinces();
        $this->load->view('admin/header');
        $this->load->view('admin/create_user', $data);
    }

    public function edit_user($user_id)
    {
        $data['user'] = $this->Admin_model->get_user_by_id($user_id);

        if (!$data['user']) {
            show_404();
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
            $this->form_validation->set_rules('province_name', 'Province', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');

            if ($this->form_validation->run()) {
                $user_data = [
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                    'province_name' => $this->input->post('province_name'),
                    'role' => $this->input->post('role'),
                ];
                $this->Admin_model->update_user($user_id, $user_data);
                $this->session->set_flashdata('success', 'User updated successfully.');
                redirect('admin/user');
            }
        }

        $data['provinces'] = $this->Admin_model->get_provinces();
        $this->load->view('admin/header');
        $this->load->view('admin/edit_user', $data);
    }

    public function delete_user($user_id)
    {
        if ($this->Admin_model->delete_user($user_id)) {
            $this->session->set_flashdata('success', 'User deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete user.');
        }
        redirect('admin/user');
    }

    public function product()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/product');  // You need to create 'admin/product.php'
        // $this->load->view('admin/footer');
    }

    public function pages()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pages');  // You need to create 'admin/pages.php'
        // $this->load->view('admin/footer');
    }
}
