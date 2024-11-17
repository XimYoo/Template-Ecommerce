<?php 

class Shop extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Menu_model'); // Pastikan model dimuat
    }

    public function index() {
        // Mengambil data menu dari model
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Memuat view dengan data menu
        $this->load->view('templates/header', $data);
        $this->load->view('shop/index');
        $this->load->view('templates/footer');
    }

    public function style1() {
        // Mengambil data menu dari model
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Memuat view dengan data menu
        $this->load->view('templates/header', $data);
        $this->load->view('shop/style1');
        $this->load->view('templates/footer');
    }

    public function style2() {
        // Mengambil data menu dari model
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Memuat view dengan data menu
        $this->load->view('templates/header', $data);
        $this->load->view('shop/style2');
        $this->load->view('templates/footer');
    }

    public function style3() {
        // Mengambil data menu dari model
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Memuat view dengan data menu
        $this->load->view('templates/header', $data);
        $this->load->view('shop/style3');
        $this->load->view('templates/footer');
    }

    public function gridview() {
        // Mengambil data menu dari model
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Memuat view dengan data menu
        $this->load->view('templates/header', $data);
        $this->load->view('shop/gridview');
        $this->load->view('templates/footer');
    }

}