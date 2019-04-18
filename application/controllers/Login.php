<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Login extends CI_Controller{

        public function index(){
            $this->load->view('login');
        }

        public function login_validation(){
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = array(
                'username' => $username,
                'password' => $password
            );

            if($this->EntreprisesModel->can_login($data)){
                $session_data = array(
                    'username' => $data['username']
                );

                $this->session->set_userdata($session_data['username']);
                redirect(base_url('Login/enter'));
            }
            else{
                redirect(base_url('login'));
            }
        }

        public function enter(){
            if($this->session->userdata('username') != ''){
                echo '<h1>Welcome '.$this->session->userdata('username').'</h1>';
            }
            else{
                redirect(base_url('login'));
            }
        }

        public function logout(){
            
        }
    }