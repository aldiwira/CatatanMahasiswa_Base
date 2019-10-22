<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class admin_model extends CI_Model {
 
     public function getData()
     {
         return $this->db->get('quote');
     }
    public function tambahData()
    {
        $data = array(
            'judul' => $this->input->post('judul', true),
            'sumber' => $this->input->post('sumber', true),
            'isi' => $this->input->post('content', true),
            'tanggal' => $this->input->post('tanggal', true)
        );

        $this->db->insert('quote', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('quote');
    }
    public function getbyid($id)
    {
        return $this->db->get_where('quote', array('id' => $id))->row_array();
    }
    public function ubahData($id)
    {
       $data = array(
            'judul' => $this->input->post('judul', true),
            'sumber' => $this->input->post('sumber', true),
            'isi' => $this->input->post('content', true)
       );
       $this->db->where('id', $id);
       $this->db->update('quote', $data);
    }
    public function cariData($keyword)
    {
        $this->db->like('judul',$keyword);
        $this->db->or_like('sumber', $keyword);
        return $this->db->get('quote')->result();
    }
    public function getUser()
    {
        $query = $this->db->order_by('id', 'DESC')->get('user');
        return $query->result();
    }
    public function countUser()
    {
        $this->db->select('level');
        $this->db->where('level', 'block');
        $query = $this->db->get('user');
        $result = 0;

        foreach($query->result() as $row) {
            $result = $result + 1;
        }

        return $result;
    }
    public function tambahUser()
    {
        $data = array(
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password', true),
            'level' => $this->input->post('level', true)
        );

        $this->db->insert('user', $data);
    }
    public function hapusUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function getbyiduser($id)
    {
        return $this->db->get_where('user', array('id' => $id))->row_array();
    }
    public function ubahDataUser($id)
    {
       $data = array(
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password', true),
            'level' => $this->input->post('level', true)
       );
       $this->db->where('id', $id);
       $this->db->update('user', $data);
    }
 }
 
 /* End of file mahasiswa_model.php */
 

?>