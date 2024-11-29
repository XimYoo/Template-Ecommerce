<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // Mengambil semua pengguna beserta nama provinsi terkait
    public function get_users()
    {
        $this->db->select('users.*, provinces.name as province_name'); // Pilih kolom user dan nama provinsi
        $this->db->from('users');
        $this->db->join('provinces', 'users.province_id = provinces.id', 'left'); // Join dengan tabel provinces
        $query = $this->db->get();
        return $query->result_array(); // Kembalikan hasil dalam bentuk array
    }

    // Mengambil data pengguna berdasarkan ID
    public function get_user_by_id($user_id)
    {
        $this->db->select('users.*, provinces.name as province_name'); // Pilih kolom user dan nama provinsi
        $this->db->from('users');
        $this->db->join('provinces', 'users.province_id = provinces.id', 'left'); // Join dengan tabel provinces
        $this->db->where('users.user_id', $user_id); // Filter berdasarkan ID pengguna
        $query = $this->db->get();
        return $query->row_array(); // Kembalikan satu baris hasil
    }

    // Menambahkan pengguna baru ke dalam database
    public function insert_user($data)
    {
        return $this->db->insert('users', $data); // Menyisipkan data pengguna baru ke tabel 'users'
    }

    // Memperbarui data pengguna berdasarkan ID
    public function update_user($user_id, $data)
    {
        $this->db->where('user_id', $user_id); // Tentukan ID pengguna yang akan diperbarui
        return $this->db->update('users', $data); // Perbarui data pengguna
    }

    // Menghapus data pengguna berdasarkan ID
    public function delete_user($user_id)
    {
        $this->db->where('user_id', $user_id); // Tentukan ID pengguna yang akan dihapus
        return $this->db->delete('users'); // Hapus data pengguna dari tabel 'users'
    }

    // Mengambil semua provinsi untuk keperluan dropdown
    public function get_provinces()
    {
        $this->db->select('*');
        $this->db->from('provinces'); // Mengambil semua data dari tabel provinces
        $query = $this->db->get();
        return $query->result_array(); // Mengembalikan hasil dalam bentuk array
    }

    // --- Fungsi Produk ---

    // Mengambil semua produk yang tersedia di stok
    public function get_all_products()
    {
        $this->db->select('p.id, p.name, p.price, p.discount_percentage, p.image, p.sale_end_date, p.created_at, p.stock_quantity, ps.status');
        $this->db->from('products p');
        $this->db->join('product_statuses ps', 'ps.id = p.status_id');
        $this->db->where('p.stock_quantity > 0'); // Menampilkan produk yang tersedia di stok
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil dalam bentuk array of objects
    }

    // Mengambil varian produk berdasarkan product_id
    public function get_product_variants($product_id)
{
    $this->db->select('*');
    $this->db->from('product_variants');
    $this->db->where('product_id', $product_id); // Filter berdasarkan product_id
    $query = $this->db->get();
    return $query->result_array(); // Return as an associative array
}


    // Menyimpan varian produk baru
    public function create_product_variant($variant_data)
    {
        // Menyimpan data varian produk ke tabel 'product_variants'
        return $this->db->insert('product_variants', $variant_data);
    }

    // Memperbarui data varian produk
    public function update_product_variant($product_id, $data)
    {
        $this->db->where('product_id', $product_id); // Tentukan ID produk yang akan diperbarui
        return $this->db->update('product_variant', $data); // Perbarui data varian produk
    }

    // Mengambil ulasan produk berdasarkan product_id
    public function get_product_reviews($product_id)
    {
        $this->db->select('rating, review_text');
        $this->db->from('product_reviews');
        $this->db->where('product_id', $product_id); // Filter berdasarkan ID produk
        $query = $this->db->get();
        return $query->result(); // Mengembalikan ulasan produk
    }

    // Mengambil status produk
    public function get_product_statuses()
    {
        $this->db->select('*');
        $this->db->from('product_statuses'); // Mengambil data dari tabel status produk
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil sebagai array of objects
    }

    // Menghitung rata-rata rating untuk produk
    public function get_product_reviews_average($product_id)
    {
        // Mengambil semua ulasan produk berdasarkan ID produk
        $reviews = $this->get_product_reviews($product_id);

        // Jika tidak ada ulasan, kembalikan nilai 0
        if (empty($reviews)) {
            return 0;
        }

        // Menghitung total rating dan jumlah ulasan
        $total_rating = 0;
        $total_reviews = count($reviews);

        foreach ($reviews as $review) {
            $total_rating += $review->rating; // Menjumlahkan rating dari semua ulasan
        }

        // Menghitung rata-rata rating dan mengembalikan nilai
        return $total_rating / $total_reviews;
    }

    // Menyimpan produk baru ke dalam database
    public function create_product($product_data)
    {
        return $this->db->insert('products', $product_data); // Menyimpan data produk ke tabel 'products'
    }

    // Memperbarui data produk berdasarkan ID
    public function update_product($product_id, $data)
    {
        $this->db->where('id', $product_id); // Tentukan ID produk yang akan diperbarui
        return $this->db->update('products', $data); // Perbarui data produk
    }

    // Menghapus produk berdasarkan ID
    public function delete_product($product_id)
    {
        $this->db->where('id', $product_id); // Tentukan ID produk yang akan dihapus
        return $this->db->delete('products'); // Hapus produk dari tabel 'products'
    }

    public function get_product_by_id($product_id)
{
    $this->db->select('p.*, ps.status');
    $this->db->from('products p');
    $this->db->join('product_statuses ps', 'ps.id = p.status_id');
    $this->db->where('p.id', $product_id); // Filter berdasarkan ID produk
    $query = $this->db->get();
    $result = $query->row_array();

    // Rename 'id' to 'product_id' for consistency
    if ($result) {
        $result['product_id'] = $result['id']; // Renaming 'id' to 'product_id'
        unset($result['id']); // Remove the 'id' field
    }

    return $result; // Kembalikan satu baris hasil
}

public function delete_product_variants($product_id)
{
    // Delete the product variants based on product_id
    $this->db->where('product_id', $product_id);
    return $this->db->delete('product_variants'); // Return the result of the deletion query
}

public function insert_product_variant($product_id, $variant_data)
{
    // Prepare the data to insert
    $data = [
        'product_id' => $product_id,
        'variant_name' => $variant_data['variant_name'],
        'image' => $variant_data['variant_img'], // Assuming 'variant_img' is the field name for the image
        'is_active' => 1, // Assuming you want to set the variant as active by default
    ];

    // Insert the variant data into the product_variants table
    return $this->db->insert('product_variants', $data);
}



}
