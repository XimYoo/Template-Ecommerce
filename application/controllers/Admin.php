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

    // --- Product Management Methods ---

    public function product()
    {
        // Ambil semua produk dari model
        $data['products'] = $this->Admin_model->get_all_products();

        // Load tampilan dengan data produk
        $this->load->view('admin/header');
        $this->load->view('admin/product', $data);  // Pastikan Anda sudah membuat view 'admin/product.php'
    }

    public function create_product()
    {
        if ($this->input->post()) {
            // Validasi form produk
            $this->form_validation->set_rules('name', 'Product Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');
            $this->form_validation->set_rules('stock_quantity', 'Stock Quantity', 'required|numeric');
            $this->form_validation->set_rules('status_id', 'Status', 'required');
            $this->form_validation->set_rules('sale_label', 'Sale Label', 'required');

            // Jika validasi gagal
            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
                die();
            }

            // Data produk yang akan disimpan
            $product_data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'stock_quantity' => $this->input->post('stock_quantity'),
                'status_id' => $this->input->post('status_id'),
                'sale_label' => $this->input->post('sale_label'),
                'image' => $this->input->post('image'),
                'hover_image' => $this->input->post('hover_image'),
                'created_at' => date('Y-m-d H:i:s'),
                'discount_percentage' => $this->input->post('discount_percentage') ?: null,
                'sale_end_date' => null,  // Defaultkan null untuk sale_end_date
            ];

            // Jika Sale Label adalah 'Sale', proses tanggalnya
            if ($this->input->post('sale_label') === 'Sale') {
                // Ambil tanggal sale_end_date
                $sale_end_date = $this->input->post('sale_end_date');
                if ($sale_end_date) {
                    // Pastikan tanggal valid, konversi ke format Y-m-d H:i:s
                    $sale_end_date = date('Y-m-d H:i:s', strtotime($sale_end_date));
                    $product_data['sale_end_date'] = $sale_end_date;
                } else {
                    // Jika tidak ada tanggal yang diberikan, set sebagai null
                    $product_data['sale_end_date'] = null;
                }
            }

            // Insert data produk dan ambil product_id yang baru
            $this->Admin_model->create_product($product_data);
            $product_id = $this->db->insert_id(); // Mendapatkan ID produk yang baru

            // Jika produk berhasil disimpan
            if ($product_id) {
                // Mendapatkan data varian produk (array)
                $variant_names = $this->input->post('variant_name'); // Array of variant names
                $variant_images = $this->input->post('variant_img'); // Array of variant images

                // Loop untuk memasukkan setiap varian secara terpisah
                if (!empty($variant_names) && count($variant_names) == count($variant_images)) {
                    foreach ($variant_names as $index => $variant_name) {
                        $variant_data = [
                            'product_id' => $product_id,  // Gunakan product_id yang baru saja dibuat
                            'variant_name' => $variant_name,
                            'image' => isset($variant_images[$index]) ? $variant_images[$index] : '',
                        ];

                        // Insert varian produk ke database
                        $this->Admin_model->create_product_variant($variant_data);
                    }

                    // Set flash message sukses
                    $this->session->set_flashdata('success', 'Product and variants created successfully.');
                } else {
                    // Jika jumlah varian name dan image tidak cocok
                    $this->session->set_flashdata('error', 'Variant names and images do not match.');
                }
            } else {
                $this->session->set_flashdata('error', 'Failed to create product.');
            }

            // Redirect ke halaman produk
            redirect('admin/product');
        }

        // Ambil data status produk untuk dropdown
        $data['statuses'] = $this->Admin_model->get_product_statuses();
        $this->load->view('admin/header');
        $this->load->view('admin/create_product', $data);
    }

    public function valid_date($date)
    {
        $date_format = 'Y-m-d';
        $d = DateTime::createFromFormat($date_format, $date);
        if ($d && $d->format($date_format) === $date) {
            return true;
        }
        $this->form_validation->set_message('valid_date', 'The {field} field must be in a valid format (YYYY-MM-DD).');
        return false;
    }

    public function edit_product($product_id)
    {
        // Ambil data produk berdasarkan ID
        $data['product'] = $this->Admin_model->get_product_by_id($product_id);
        $data['variants'] = $this->Admin_model->get_product_variants($product_id); // Ambil data variant

        if (!$data['product']) {
            show_404();
        }

        if ($this->input->post()) {
            // Validasi form
            $this->form_validation->set_rules('name', 'Product Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');
            $this->form_validation->set_rules('stock_quantity', 'Stock Quantity', 'required|numeric');
            $this->form_validation->set_rules('status_id', 'Status', 'required');

            if ($this->form_validation->run()) {
                // Update data produk
                $product_data = [
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'price' => $this->input->post('price'),
                    'stock_quantity' => $this->input->post('stock_quantity'),
                    'status_id' => $this->input->post('status_id'),
                ];

                if ($this->Admin_model->update_product($product_id, $product_data)) {
                    // Update data variant
                    $variant_data = [
                        'variant_name' => $this->input->post('variant_name'),
                        'variant_img' => $this->input->post('variant_img')
                    ];

                    if ($this->Admin_model->update_product_variant($product_id, $variant_data)) {
                        $this->session->set_flashdata('success', 'Product and variants updated successfully.');
                    } else {
                        $this->session->set_flashdata('error', 'Failed to update product variants.');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Failed to update product.');
                }
                redirect('admin/product');
            }
        }

        // Ambil data status produk untuk dropdown
        $data['statuses'] = $this->Admin_model->get_product_statuses();
        $this->load->view('admin/header');
        $this->load->view('admin/edit_product', $data);
    }


    public function delete_product($product_id)
    {
        if ($this->Admin_model->delete_product($product_id)) {
            $this->session->set_flashdata('success', 'Product deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete product.');
        }
        redirect('admin/product');
    }
}
