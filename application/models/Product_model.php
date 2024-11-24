<?php

class Product_model extends CI_Model {

    // Ubah metode menjadi public agar bisa diakses dari controller
    public function get_status_label($status) {
        // Map status ke label yang sesuai
        switch ($status) {
            case 'sale':
                return 'SALE';
            case 'new':
                return 'NEW';
            case '50% off':
                return '50% OFF';
            case 'hot':
                return 'HOT';
            case 'sold out':
                return 'SOLD OUT';
            case 'best seller':
                return 'BEST SELLER';
            default:
                return '';  // Jika status tidak dikenali, return string kosong
        }
    }

    // Mendapatkan semua produk dengan variasi dan status
    public function get_all_products() {
        // Pilih kolom yang relevan dari produk, variasi, dan status
        $this->db->select('p.*, v.variant_name, v.image AS variant_image, ps.status');
        $this->db->from('products p');
        $this->db->join('product_variants v', 'v.product_id = p.id', 'left');
        $this->db->join('product_statuses ps', 'ps.id = p.status_id', 'left');  // Join dengan tabel product_statuses
        $this->db->where('ps.status !=', 'inactive');  // Hanya mengambil produk dengan status yang tidak inactive
        $this->db->order_by('p.created_at', 'DESC');  // Urutkan berdasarkan waktu pembuatan produk
        $query = $this->db->get();
        $products = $query->result();  // Ambil hasil query

        // Kelompokkan produk berdasarkan ID produk
        $grouped_products = [];
        foreach ($products as &$product) {
            // Set default review count jika tidak ada data ulasan
            if (!isset($product->reviews)) {
                $product->reviews = 0;  // Default 0 ulasan jika tidak ada
            }

            // Menambahkan status label ke produk
            $product->status_label = $this->get_status_label($product->status);

            // Mengelompokkan produk berdasarkan ID-nya
            if (!isset($grouped_products[$product->id])) {
                $grouped_products[$product->id] = $product;
                $grouped_products[$product->id]->variants = [];
            }

            // Menambahkan variasi produk
            $grouped_products[$product->id]->variants[] = [
                'variant_name' => $product->variant_name,
                'variant_image' => $product->variant_image
            ];
        }

        // Mengembalikan produk yang sudah dikelompokkan dengan variasinya
        return array_values($grouped_products);  // Mengembalikan array produk yang sudah dikelompokkan
    }

    // Mendapatkan rata-rata rating untuk produk berdasarkan ID
    public function get_product_reviews_average($product_id) {
        $this->db->select_avg('rating');  // Mengambil rata-rata rating
        $this->db->from('product_reviews');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query->row()->rating;  // Mengembalikan rata-rata rating produk
    }
}
