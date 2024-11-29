<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{

    // Ambil semua user dan nama provinsi terkait
    public function get_users()
    {
        $this->db->select('users.*, provinces.name as province_name'); // Pilih kolom user dan provinsi
        $this->db->from('users');
        $this->db->join('provinces', 'users.province_id = provinces.id', 'left'); // Join ke tabel provinces
        $query = $this->db->get();
        return $query->result_array(); // Kembalikan hasil sebagai array
    }

    // Ambil data user berdasarkan ID
    public function get_user_by_id($user_id)
    {
        $this->db->select('users.*, provinces.name as province_name'); // Ambil data user dan nama provinsi
        $this->db->from('users');
        $this->db->join('provinces', 'users.province_id = provinces.id', 'left'); // Join ke tabel provinces
        $this->db->where('users.user_id', $user_id); // Filter berdasarkan ID user
        $query = $this->db->get();
        return $query->row_array(); // Kembalikan satu baris hasil
    }

    // Tambah user baru
    public function insert_user($data)
    {
        return $this->db->insert('users', $data); // Masukkan data ke tabel users
    }

    // Perbarui data user berdasarkan ID
    public function update_user($user_id, $data)
    {
        $this->db->where('user_id', $user_id); // Tentukan ID user yang akan diperbarui
        return $this->db->update('users', $data); // Perbarui data user
    }

    // Hapus user berdasarkan ID
    public function delete_user($user_id)
    {
        $this->db->where('user_id', $user_id); // Tentukan ID user yang akan dihapus
        return $this->db->delete('users'); // Hapus data user
    }

    // Ambil semua provinsi (jika diperlukan untuk dropdown)
    public function get_provinces()
    {
        $this->db->select('*');
        $this->db->from('provinces'); // Ambil semua data dari tabel provinces
        $query = $this->db->get();
        return $query->result_array(); // Kembalikan hasil sebagai array
    }

    // --- Product Functions ---

    // Ambil semua produk
    public function get_all_products()
    {
        // Menambahkan kolom yang diperlukan dalam query
        $this->db->select('p.id, p.name, p.price, p.discount_percentage, p.image, p.sale_end_date, p.created_at, p.stock_quantity, ps.status');
        $this->db->from('products p');
        $this->db->join('product_statuses ps', 'ps.id = p.status_id');
        $this->db->where('p.stock_quantity > 0'); // Menampilkan produk yang tersedia di stok
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil dalam bentuk array of objects
    }


    // Ambil varian produk berdasarkan product_id
    // Insert product_variant

    // Update product_variant
    public function update_product_variant($product_id, $data)
    {
        $this->db->where('product_id', $product_id);
        return $this->db->update('product_variant', $data);
    }

    // Get product variants by product_id
    public function create_product_variant($variant_data)
    {
        // Pastikan menggunakan nama tabel yang benar
        return $this->db->insert('product_variants', $variant_data);
    }
    



    // Ambil ulasan produk
    public function get_product_reviews($product_id)
    {
        $this->db->select('rating, review_text');
        $this->db->from('product_reviews');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query->result();
    }
    // Menambahkan method untuk mengambil status produk
    public function get_product_statuses()
    {
        $this->db->select('*');
        $this->db->from('product_statuses'); // Tabel yang menyimpan status produk
        $query = $this->db->get();
        return $query->result(); // Kembalikan hasilnya dalam bentuk array of objects
    }
    // Menghitung rata-rata rating untuk produk
    public function get_product_reviews_average($product_id)
    {
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

    // Menyimpan produk baru
    public function create_product($product_data)
{
    // Pastikan tabel 'products' dan kolom-kolom yang digunakan sudah benar
    return $this->db->insert('products', $product_data);
}


    // Mengupdate produk
    public function update_product($product_id, $data)
    {
        $this->db->where('id', $product_id); // Tentukan ID produk yang akan diperbarui
        return $this->db->update('products', $data); // Perbarui data produk
    }

    // Menghapus produk
    public function delete_product($product_id)
    {
        $this->db->where('id', $product_id); // Tentukan ID produk yang akan dihapus
        return $this->db->delete('products'); // Hapus data produk
    }

    // Ambil data produk berdasarkan ID
    public function get_product_by_id($product_id)
    {
        $this->db->select('p.*, ps.status');
        $this->db->from('products p');
        $this->db->join('product_statuses ps', 'ps.id = p.status_id');
        $this->db->where('p.id', $product_id);
        $query = $this->db->get();
        return $query->row_array(); // Kembalikan satu baris hasil
    }
}
