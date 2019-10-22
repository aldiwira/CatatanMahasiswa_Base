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
            $data['notif']=$this->admin_model->countUser();
            if ($this->input->post('key')) {
                $keyword=$this->input->post('key');
                $data['barang']=$this->admin_model->cariData($keyword);
            }
            $data['content'] = $this->load->view('admin/home', $data, TRUE);
            $this->load->view('admin/index', $data);   
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
                $this->session->set_flashdata('flash-data', 'Artikel Sudah Ditambah');
                redirect('admin','refresh');
            }
            $this->load->view('admin/index', $data); 
        }
        public function hapus($id)
        {
            $this->admin_model->hapus($id);
            $this->session->set_flashdata('flash-data', 'Artikel sudah dihapus');
            redirect('admin','refresh');
        }
        public function detail($id)
        {
            $data['title']="Detail Quote";
            $data['barang']=$this->admin_model->getbyid($id);
            $data['content'] = $this->load->view('admin/detail', $data, TRUE);
            $this->load->view('admin/index', $data);
        }
        public function edit($id)
        {
            $data['title']="Edit Quote";
            $data['barang']=$this->admin_model->getbyid($id);
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('sumber', 'sumber', 'required');
            $this->form_validation->set_rules('content', 'content', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data['content'] = $this->load->view('admin/edit', $data, TRUE);
            }else{
                $this->admin_model->ubahData($id);
                $this->session->set_flashdata('flash_data','Artikel sudah diedit');
                redirect('admin','refresh');
            }     
            $this->load->view('admin/index', $data);
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login','refresh');   
        }
        public function user()
        {
            $data['title']="Admin";
            $data['user']=$this->admin_model->getUser();
            $data['notif']=$this->admin_model->countUser();
            $data['content'] = $this->load->view('admin/user', $data, TRUE);
            $this->load->view('admin/index', $data); 
        }
    }
    
    /* End of file Admin.php */
    
?>