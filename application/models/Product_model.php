<?php
class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mengambil semua produk
    public function get_all_products() {
        $this->db->select('p.id, p.name, p.description, p.price, p.discount_percentage, p.image, p.hover_image, p.sale_label, p.sale_end_date, ps.status');
        $this->db->from('products p');
        $this->db->join('product_statuses ps', 'ps.id = p.status_id');
        $this->db->where('p.stock_quantity > 0'); // Menampilkan produk yang tersedia di stok
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil dalam bentuk array of objects
    }    
    
    // Mengambil varian produk berdasarkan product_id
    public function get_product_variants($product_id) {
        $this->db->select('id, variant_name, image, variant_price');
        $this->db->from('product_variants');
        $this->db->where('product_id', $product_id);  // Perlu ada parameter $product_id
        $query = $this->db->get();
        return $query->result();
    }

    // Mengambil ulasan produk
    public function get_product_reviews($product_id) {
        $this->db->select('rating, review_text');
        $this->db->from('product_reviews');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query->result();
    }

    // Menghitung rata-rata rating untuk produk
    public function get_product_reviews_average($product_id) {
        // Ambil semua ulasan untuk produk ini
        $reviews = $this->get_product_reviews($product_id);
        
        // Jika tidak ada ulasan, kembalikan 0
        if (empty($reviews)) {
            return 0;
        }

        // Hitung rata-rata rating
        $total_rating = 0;
        $total_reviews = count($reviews);

        foreach ($reviews as $review) {
            $total_rating += $review->rating;
        }

        // Hitung rata-rata dan kembalikan
        return $total_rating / $total_reviews;
    }
}

