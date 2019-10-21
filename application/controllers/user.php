<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class user extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('admin_model');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->helper(array('form', 'url'));
            if ($this->session->userdata('level')!="user") {
                redirect('login','refresh');
            }
        }
        public function index()
        {
            $data['title']="Welcome";
            $data['barang']=$this->admin_model->getData()->result();
            $data['content'] = $this->load->view('user/home', $data, TRUE);
            $this->load->view('user/index', $data); 
        }
    
    }
    
    /* End of file user.php */
    
?>