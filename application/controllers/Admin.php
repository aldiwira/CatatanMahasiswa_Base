<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('admin_model');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->helper(array('form', 'url'));
            if ($this->session->userdata('level')!="admin") {
                redirect('login','refresh');
            }
        }
        public function index()
        {
            $data['title']="Admin";
            $data['barang']=$this->admin_model->getData()->result();
            $data['content'] = $this->load->view('admin/home', $data, TRUE);
            $this->load->view('admin/admin', $data);   
        }
        public function tambah()
        {
            $data['title']="Tambah User";
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('sumber', 'sumber', 'required');
            $this->form_validation->set_rules('content', 'content', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data['content'] = $this->load->view('admin/tambah', $data, TRUE);
            }else{
                $this->admin_model->tambahData();
                $this->session->set_flashdata('flash-data', 'Barang Sudah Ditambah');
                redirect('admin','refresh');
            }
            $this->load->view('admin/admin', $data); 
        }
        public function hapus($id)
        {
            $this->admin_model->hapus($id);
            $this->session->set_flashdata('flash-data', 'Barang sudah dihapus');
            redirect('admin','refresh');
        }
        public function detail($id)
        {
            $data['title']="Detail Barang";
            $data['barang']=$this->admin_model->getbyid($id);
            $data['content'] = $this->load->view('admin/detail', $data, TRUE);
            $this->load->view('admin/admin', $data);
        }
        public function edit($id)
        {
            $data['title']="Edit data barang";
            $data['barang']=$this->admin_model->getbyid($id);
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('sumber', 'sumber', 'required');
            $this->form_validation->set_rules('content', 'content', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data['content'] = $this->load->view('admin/edit', $data, TRUE);
            }else{
                $this->admin_model->ubahData($id);
                $this->session->set_flashdata('flash_data','Barang sudah diedit');
                redirect('admin','refresh');
            }     
            $this->load->view('admin/admin', $data);
        }
    }
    
    /* End of file Admin.php */
    
?>