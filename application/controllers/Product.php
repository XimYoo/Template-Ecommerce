<?php 

class Product extends CI_Controller {  
    
    public function __construct() {  
        parent::__construct();  
        $this->load->model('Menu_model');  
        $this->load->model('Product_model'); // Memuat model produk  
    }  

    public function index() {  
        // Mengambil data menu dari model  
        $data['menus'] = $this->Menu_model->get_all_menus();  

        // Mengambil data produk  
        $data['products'] = $this->Product_model->get_all_products(); // Ambil semua produk  

        // Memuat view dengan data menu dan produk  
        $this->load->view('templates/header', $data);  
        $this->load->view('product/index', $data); // Kirim data produk ke view  
        $this->load->view('templates/footer');  
    }  
}