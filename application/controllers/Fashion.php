<?php 

class Fashion extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Menu_model'); // Pastikan model dimuat
    }

    public function index() {
        // Mengambil data menu dari model
        $data['menus'] = $this->Menu_model->get_all_menus();

        // Memuat view dengan data menu
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

}