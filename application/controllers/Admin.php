<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');

        // Memuat pustaka session untuk mengelola data sesi
        $this->load->library('session');
        $this->load->library('form_validation');

        // Mengecek apakah pengguna sudah login dan apakah role-nya adalah admin
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'admin') {
            // Arahkan ke halaman login jika pengguna belum login atau bukan admin
            redirect('login');
        }
    }

    public function dashboard()
    {
        // Halaman Dashboard Admin
        $this->load->view('admin/header');  // Memuat tampilan header
        $this->load->view('admin/dashboard');  // Memuat tampilan dashboard
    }

    public function user()
    {
        // Mengambil data pengguna dari model
        $data['users'] = $this->Admin_model->get_users();

        // Memuat tampilan dengan data pengguna
        $this->load->view('admin/header');
        $this->load->view('admin/user', $data);
    }

    public function create_user()
    {
        if ($this->input->post()) {
            // Aturan validasi form untuk pembuatan pengguna
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
            $this->form_validation->set_rules('province', 'Province', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            if ($this->form_validation->run()) {
                // Menyiapkan data pengguna yang akan disimpan
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

                // Menyimpan data pengguna baru ke database
                if ($this->Admin_model->insert_user($user_data)) {
                    $this->session->set_flashdata('success', 'User created successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user. Please try again.');
                }
                redirect('admin/user');
            } else {
                // Jika validasi gagal, menampilkan pesan error
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/create_user');
            }
        }

        // Mengambil data provinsi untuk dropdown
        $data['provinces'] = $this->Admin_model->get_provinces();
        $this->load->view('admin/header');
        $this->load->view('admin/create_user', $data);
    }

    public function edit_user($user_id)
    {
        // Mengambil data pengguna yang ada berdasarkan ID
        $data['user'] = $this->Admin_model->get_user_by_id($user_id);

        if (!$data['user']) {
            show_404();
        }

        if ($this->input->post()) {
            // Aturan validasi form untuk edit pengguna
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
            $this->form_validation->set_rules('province', 'Province', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');

            if ($this->form_validation->run()) {
                // Menyiapkan data pengguna yang akan diupdate
                $user_data = [
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                    'province_id' => $this->input->post('province'),
                    'role' => $this->input->post('role'),
                    'address' => $this->input->post('address'),
                ];

                // Memanggil model untuk memperbarui data pengguna
                if ($this->Admin_model->update_user($user_id, $user_data)) {
                    $this->session->set_flashdata('success', 'User updated successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Failed to update user. Please try again.');
                }
                redirect('admin/user');
            }
        }

        // Mengambil data provinsi untuk dropdown
        $data['provinces'] = $this->Admin_model->get_provinces();

        // Memuat tampilan untuk edit pengguna
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

    // --- Metode untuk Mengelola Produk ---

    public function product()
    {
        // Mengambil semua produk dari model
        $data['products'] = $this->Admin_model->get_all_products();

        // Memuat tampilan dengan data produk
        $this->load->view('admin/header');
        $this->load->view('admin/product', $data);  // Pastikan Anda sudah membuat view 'admin/product.php'
    }

    public function create_product()
    {
        if ($this->input->post()) {
            // Aturan validasi form untuk produk
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

            // Menyiapkan data produk yang akan disimpan
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

            // Memproses tanggal jika sale label adalah 'Sale'
            if ($this->input->post('sale_label') === 'Sale') {
                $sale_end_date = $this->input->post('sale_end_date');
                if ($sale_end_date) {
                    // Mengkonversi tanggal ke format yang sesuai
                    $sale_end_date = date('Y-m-d H:i:s', strtotime($sale_end_date));
                    $product_data['sale_end_date'] = $sale_end_date;
                } else {
                    $product_data['sale_end_date'] = null;
                }
            }

            // Menyimpan produk baru dan mendapatkan ID produk
            $this->Admin_model->create_product($product_data);
            $product_id = $this->db->insert_id(); // Mendapatkan ID produk yang baru

            // Jika produk berhasil disimpan
            if ($product_id) {
                // Mengambil data varian produk (array)
                $variant_names = $this->input->post('variant_name'); // Nama varian
                $variant_images = $this->input->post('variant_img'); // Gambar varian

                // Memasukkan varian produk jika ada
                if (!empty($variant_names) && count($variant_names) == count($variant_images)) {
                    foreach ($variant_names as $index => $variant_name) {
                        $variant_data = [
                            'product_id' => $product_id,  // Menggunakan product_id yang baru saja dibuat
                            'variant_name' => $variant_name,
                            'image' => isset($variant_images[$index]) ? $variant_images[$index] : '',
                        ];

                        // Menyimpan varian produk
                        $this->Admin_model->create_product_variant($variant_data);
                    }

                    $this->session->set_flashdata('success', 'Product and variants created successfully.');
                } else {
                    // Jika jumlah nama varian dan gambar tidak cocok
                    $this->session->set_flashdata('error', 'Variant names and images do not match.');
                }
            } else {
                $this->session->set_flashdata('error', 'Failed to create product.');
            }

            // Arahkan ke halaman produk
            redirect('admin/product');
        }

        // Mengambil data status produk untuk dropdown
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
    // Fetch product data
    $data['product'] = $this->Admin_model->get_product_by_id($product_id);
    $data['variants'] = $this->Admin_model->get_product_variants($product_id); // Fetch product variants

    if (!$data['product']) {
        show_404();
    }

    if ($this->input->post()) {
        // Validate form inputs for the product
        $this->form_validation->set_rules('name', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');
        $this->form_validation->set_rules('stock_quantity', 'Stock Quantity', 'required|numeric');
        $this->form_validation->set_rules('status_id', 'Status', 'required');
        $this->form_validation->set_rules('discount_percentage', 'Discount Percentage', 'required|numeric'); // Discount validation
        $this->form_validation->set_rules('sale_label', 'Sale Label', 'required');
        
        if ($this->form_validation->run()) {
            // Collect form data including discount_percentage
            $product_data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'stock_quantity' => $this->input->post('stock_quantity'),
                'status_id' => $this->input->post('status_id'),
                'sale_label' => $this->input->post('sale_label'),
                'image' => $this->input->post('image'),
                'hover_image' => $this->input->post('hover_image'),
                'discount_percentage' => $this->input->post('discount_percentage') ?: null,
                'sale_end_date' => null,  // Defaultkan null untuk sale_end_date
            ];

            // Compare existing product data with new data
            foreach ($product_data as $key => $value) {
                // Skip update if no change is detected
                if ($data['product'][$key] == $value) {
                    unset($product_data[$key]); // Remove the key if no change
                }
            }

            if (!empty($product_data)) {
                // If there are changes, update product
                if ($this->Admin_model->update_product($product_id, $product_data)) {
                    $this->session->set_flashdata('success', 'Product updated successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Failed to update product.');
                }
            }

            // Handle variants (if any new variants are added or existing ones modified)
            $variant_names = $this->input->post('variant_name');
            $variant_images = $this->input->post('variant_img');

            if (!empty($variant_names) && count($variant_names) == count($variant_images)) {
                // Check if variants changed (existing variants vs submitted)
                $existing_variants = array_column($data['variants'], 'variant_name');

                // Only insert or update if variants are different
                for ($i = 0; $i < count($variant_names); $i++) {
                    if (!in_array($variant_names[$i], $existing_variants)) {
                        $variant_data = [
                            'variant_name' => $variant_names[$i],
                            'variant_img' => $variant_images[$i], // Use the correct column name here, e.g., 'image'
                        ];

                        // Insert the new variant
                        $this->Admin_model->insert_product_variant($product_id, $variant_data);
                    }
                }

                // Check if any variants were removed
                foreach ($existing_variants as $existing_variant) {
                    if (!in_array($existing_variant, $variant_names)) {
                        // If a variant is removed from the form, delete it
                        $this->Admin_model->delete_variant_by_name($product_id, $existing_variant);
                    }
                }

                $this->session->set_flashdata('success', 'Product and variants updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Invalid variant data.');
            }

            redirect('admin/product');
        }
    }

    // Fetch the status for dropdowns
    $data['statuses'] = $this->Admin_model->get_product_statuses();
    $this->load->view('admin/header');
    $this->load->view('admin/edit_product', $data);
}


public function delete_product($product_id)
{
    // First, delete the product variants
    $this->Admin_model->delete_product_variants($product_id);

    // Now, delete the product itself
    $this->db->where('id', $product_id);
    if ($this->db->delete('products')) {
        $this->session->set_flashdata('success', 'Product and its variants were successfully deleted.');
    } else {
        $this->session->set_flashdata('error', 'Failed to delete product.');
    }
    redirect('admin/product');
}

}
