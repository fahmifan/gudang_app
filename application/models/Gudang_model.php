<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();        
    }

    public function get_data()
    {
        $query = $this->db->get('stock'); 
        return $query;
    }

    public function get_data_id($id)
    {
        $query = $this->db->get_where('stock', array('id' => $id));
        return $query;
    }

    public function input_data($data_input)
    {
        $query = $this->db->insert('stock',$data_input);
        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->delete('stock', array('id' => $id));
        return $query;
    }

    public function edit_data($data_input, $id)
    {
        $query = $this->db->set($data_input)->where('id', $id)->update('stock');
        return $query;
    }
}