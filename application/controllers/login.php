<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('login_model');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('session');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $data['title']="Login";
            $data['content'] = $this->load->view('login/login', $data, TRUE);
            $this->load->view('login/index', $data);
        }
        public function register()
        {
            $data['title']="register";
            $this->form_validation->set_rules('uname1', 'uname1', 'required');
            $this->form_validation->set_rules('pwd1', 'pwd1', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data['content'] = $this->load->view('login/register', $data, TRUE);
            }else{
                $this->login_model->register();
                redirect('login/berhasil','refresh');
            }
            $this->load->view('login/index', $data);
        }
        public function berhasil()
        {
            $data['title']="berhasil";
            $data['content'] = $this->load->view('login/berhasil', $data, TRUE);
            $this->load->view('login/index', $data);
        }
        public function confirm()
        {
            $data['title']="Tunggu Sebentar";
            $data['content'] = $this->load->view('login/berhasil', $data, TRUE);
            $this->load->view('login/index', $data);
        }

        public function proses_login()
        {
            $username= htmlspecialchars($this->input->post('uname1'));
            $password= htmlspecialchars($this->input->post('pwd1'));
            $ceklogin=$this->login_model->login($username, $password);
            if ($ceklogin) {
                foreach ($ceklogin as $row) {
                    $this->session->set_userdata('user', $row->username);
                    $this->session->set_userdata('level', $row->level);

                    if ($this->session->userdata('level')=="admin") {
                        redirect('admin');
                    }elseif ($this->session->userdata('level')=="user") {
                        redirect('user');
                    }elseif ($this->session->userdata('level')=="block") {
                        redirect('login/confirm');
                    } else {
                        redirect('login');
                    }
                }
            } else {
                
                $data['title']="Login";
                $data['pesan']="username dan password anda salah";
                $data['title']="Login";
                $data['content'] = $this->load->view('login/login', $data, TRUE);
                $this->load->view('login/index', $data);
            }
            
        }
        
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login','refresh');   
        }
    
    }
    
    /* End of file login.php */
    
?>