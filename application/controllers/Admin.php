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
    }

    public function user()
    {
        // Ambil data user dari model
        $data['users'] = $this->Admin_model->get_users();

        // Load tampilan dengan data user
        $this->load->view('admin/header');
        $this->load->view('admin/user', $data);
    }

    public function create_user()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
            $this->form_validation->set_rules('province', 'Province', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            if ($this->form_validation->run()) {
                $user_data = [
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'phone_number' => $this->input->post('phone_number'),
                    'province_id' => $this->input->post('province'),
                    'role' => $this->input->post('role'),
                    'address' => $this->input->post('address'),
                    'created_at' => date('Y-m-d H:i:s'),
                ];

                if ($this->Admin_model->insert_user($user_data)) {
                    $this->session->set_flashdata('success', 'User created successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user. Please try again.');
                }
                redirect('admin/user');
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/create_user');
            }
        }

        $data['provinces'] = $this->Admin_model->get_provinces();
        $this->load->view('admin/header');
        $this->load->view('admin/create_user', $data);
    }


    public function edit_user($user_id)
    {
        // Fetch the existing user data
        $data['user'] = $this->Admin_model->get_user_by_id($user_id);

        if (!$data['user']) {
            show_404();
        }

        if ($this->input->post()) {
            // Form validation rules
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
            $this->form_validation->set_rules('province', 'Province', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');

            // Check if form validation passes
            if ($this->form_validation->run()) {
                // Gather updated user data
                $user_data = [
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                    'province_id' => $this->input->post('province'), // Updated field name
                    'role' => $this->input->post('role'),
                    'address' => $this->input->post('address'),
                ];

                // Call the model to update user data
                if ($this->Admin_model->update_user($user_id, $user_data)) {
                    $this->session->set_flashdata('success', 'User updated successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Failed to update user. Please try again.');
                }
                redirect('admin/user');
            }
        }

        // Load provinces for the dropdown
        $data['provinces'] = $this->Admin_model->get_provinces();

        // Load the edit user view
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
    }

    public function pages()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pages');  // You need to create 'admin/pages.php'
    }
}
