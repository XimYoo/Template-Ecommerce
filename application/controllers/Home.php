<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model'); // Load Menu model
        $this->load->model('Product_model'); // Load Product model
    }

    public function index()
    {
        // Ambil data produk
        $products = $this->Product_model->get_all_products();
        // Debugging: Tampilkan informasi yang diterima dari model get_all_products()
        // var_dump($products); // Tampilkan struktur dan isi dari $products
        // exit; // Hentikan eksekusi untuk melihat outputnya

        // Loop untuk ambil varian dan informasi lainnya untuk setiap produk
        foreach ($products as &$product) {
            // Ambil varian untuk setiap produk berdasarkan product_id
            $product->variants = $this->Product_model->get_product_variants($product->id);

            // Tambahkan rata-rata rating untuk produk
            $product->average_rating = $this->Product_model->get_product_reviews_average($product->id);

            // Cek apakah produk memiliki gambar hover
            $product->has_hover_image = !empty($product->hover_image); // Cek ada gambar hover atau tidak
            $product->hover_image = $product->has_hover_image ? $product->hover_image : null;

            // Cek sale label dan sale end date
            if (strtolower($product->sale_label) === 'sale' && !empty($product->sale_end_date) && $product->sale_end_date !== '0000-00-00 00:00:00') {
                $product->sale_end_date = date('Y-m-d H:i:s', strtotime($product->sale_end_date));
            } else {
                $product->sale_end_date = null; // Set ke null jika tidak ada
            }
        }

        // Siapkan data untuk view
        $data['products'] = $products;
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Kirim data ke view
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }



    public function fashion()
    {
        // Load data for the fashion page  
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Load the fashion view  
        $this->load->view('templates/header', $data);
        $this->load->view('home/fashion');
        $this->load->view('templates/footer');
    }

    public function account()
    {
        // Load data for the account page  
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Load the account view  
        $this->load->view('templates/header', $data);
        $this->load->view('home/account');
        $this->load->view('templates/footer');
    }
}
