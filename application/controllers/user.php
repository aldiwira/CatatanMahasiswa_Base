<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class user extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('admin_model');
            $this->load->model('user_model');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->helper(array('form', 'url'));
            
            if ($this->session->userdata('level')!="user") {
                redirect('login','refresh');
            }
        }
        public function index()
        {
            $data['title']="Catatan Mahasiswa";
            $data['quote']=$this->user_model->getData();
            $data['content'] = $this->load->view('user/home', $data, TRUE);
            $this->load->view('user/index', $data); 
        }
        public function artikel($id)
        {
            $data['title']="Catatan Mahasiswa";
            $data['quote']=$this->user_model->getbyid($id);
            $data['content'] = $this->load->view('user/artikel', $data, TRUE);
            $this->load->view('user/index', $data); 
        }
        public function buat()
        {
            $data['title']="Catatan Mahasiswa";
            $data['pembuat']=$this->session->userdata('username');
            $data['content'] = $this->load->view('user/tambah', $data, TRUE);
            $this->load->view('user/index', $data);
        }
        public function keluar()
        {
            $this->session->sess_destroy();
            redirect('login','refresh');   
        }
    }
    
    /* End of file user.php */
    
?>