<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Login extends CI_Controller{

        public function index(){
            $this->load->view('login/login');
        }

        public function login_validation(){
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hash = sha1($password);

            $data = array(
                'username' => $username,
                'password' => $hash
            );

            if($this->EntreprisesModel->can_login($data)){
                $session_data = array(
                    'username' => $data['username']
                );

                $this->session->set_userdata($session_data);
                redirect(base_url('login/enter'));
            }
            else{
                redirect(base_url('login'));
            }
        }

        public function enter(){
            if($this->session->userdata['username'] != ''){
                echo '<h1>Welcome '.$this->session->userdata['username'].'</h1>';
                echo '<label><a href="'.base_url('login/logout').'">logout</a></label>';
            }
            else{
                redirect(base_url('login'));
            }
        }

        public function logout(){
            $this->session->unset_userdata($session_data);
            redirect(base_url('login'));
        }
    }