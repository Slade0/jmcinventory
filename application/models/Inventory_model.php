<?php

class Inventory_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    protected function _prepareItemdata() {
        // process the incoming accessories data and put into appropriate format
        $accessories = $this->input->post('accessories');
        if (is_array($accessories)) {
            // iterate through the accessories getting rid of any empty blanks, plus get rid of leading/trailing spaces - a common typo
            $noblanks = [];
            foreach ($accessories as $acc) {
                $trimmed = trim($acc);
                if ($trimmed) {
                    $noblanks[] = $trimmed;
                }
            }
            $accessoriesformatted = json_encode($noblanks);
        } else {
            $accessoriesformatted = $accessories;
        }
        $now = date("Y-m-d H:i:s");

        $data = array(
            'serial' => $this->input->post('serial'),
            'description' => $this->input->post('description'),
            'accessories' => $accessoriesformatted,
            'datemodified' => $now,
            'dateadded' => $now
        );
        
        if ($this->input->post('category_id')) {
            $data['category_id'] = $this->input->post('category_id');
        }
        return $data;
    }

    function check_serial($id = '', $serial) {
        $this->db->where('serial', $serial);
        if ($id) {
            $this->db->where_not_in('id', $id);
        }
        return $this->db->get('items')->num_rows();
    }

    public function add() {
        $data = $this->_prepareItemdata();
        return $this->db->insert('items', $data);
    }

    public function edit() {
        $data = $this->_prepareItemdata();
        $data['id'] = $this->input->post('item_id');
        return $this->db->replace('items', $data);
    }
    
    public function delete($item_id) {
        return $this->db->delete('items',['id'=>$item_id]);
    }
    
    public function getallitems() {
        $this->db->order_by('serial', 'asc');
        $query = $this->db->get_where('items');
        return $query->result();
    }

    public function getcategories() {
        $this->db->order_by('title', 'asc');
        $query = $this->db->get_where('categories');
        return $query->result();
    }

    public function getitem($item_id) {
        $query = $this->db->get_where('items', ['id' => $item_id]);
        $result = $query->result();
        if ($result) {
            $item = $query->row(0);
            $item->accessories = json_decode($item->accessories);
            return $item;
        }
        return false;
    }

    public function delete_news($slug) {
        if (!$slug) {
            return false;
        }
        return $this->db->delete('news', ['slug' => $slug]);
    }

}
