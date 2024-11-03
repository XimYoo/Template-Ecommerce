<?php 

class Menu_model extends CI_Model {

    public function get_all_menus($parent_id = NULL) {
        $this->db->select('*');
        $this->db->from('menus');
        $this->db->where('is_active', 1);

        if ($parent_id === NULL) {
            $this->db->where('parent_id', NULL);
        } else {
            $this->db->where('parent_id', $parent_id);
        }

        $query = $this->db->get();
        $result = $query->result();

        foreach ($result as $menu) {
            $menu->children = $this->get_all_menus($menu->id);
        }

        return $result;
    }
}