<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class user_model extends CI_Model {
    
    public function getData()
    {
        $query = $this->db->order_by('id', 'DESC')->get('quote');
        return $query->result();
    }

    public function getbyid($id)
    {
        return $this->db->get_where('quote', array('id' => $id))->row_array();
    }
    
    }
    
    /* End of file user_model.php */
    
?>