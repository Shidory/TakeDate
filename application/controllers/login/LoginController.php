<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class LoginController extends CI_Controller{

        public function index(){
            $this->horaire_view();
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
                redirect(base_url('loginController'));
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

        // methode qui charge la vue login_agent
        public function login_view(){
            $this->load->view('login/login_agent');
        }
    }