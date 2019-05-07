<?php

    class DepartementController{

        public function index(){

        }
        
        public function enregstrer_departement(){
            $id = (int) $this->session->userdata('id');
            $nom = $this->input->post("name");

            $data = array(
                    'nomDepartement' => $nom,
                    'idEntreprise' => $id
                );
            
            $this->DepartementModel->enregister($data);
            redirect('');
        }
    }
?>