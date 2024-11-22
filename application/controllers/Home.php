<?php 

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Menu_model'); // Load Menu model
        $this->load->model('Product_model'); // Load Product model
    }

    public function index() {
        // Retrieve products from the Product_model
        $data['products'] = $this->Product_model->get_all_products();  // Ensure this returns an array of products

        // Ensure each product has a reviews property (if missing)
        foreach ($data['products'] as &$product) {
            if (!isset($product->reviews)) {
                $product->reviews = 0;  // Default to 0 reviews if missing
            }

            // Retrieve the average rating for each product
            $product->average_rating = $this->Product_model->get_product_reviews_average($product->id);
        }

        // Retrieve menus (if needed)
        $data['menus'] = $this->Menu_model->get_all_menus();  // Adjust as needed for your menu structure

        // Pass data to the view
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);  // Make sure $data is passed to the view
        $this->load->view('templates/footer');
    }

    public function fashion() {
        // Load data for the fashion page
        $data['menus'] = $this->Menu_model->get_all_menus();
        
        // Load the fashion view
        $this->load->view('templates/header', $data);
        $this->load->view('home/fashion'); // Make sure this view exists
        $this->load->view('templates/footer');
    }

    public function account() {
        // Load data for the account page
        $data['menus'] = $this->Menu_model->get_all_menus();
        
        // Load the account view
        $this->load->view('templates/header', $data);
        $this->load->view('home/account'); // Make sure this view exists
        $this->load->view('templates/footer');
    }
}
