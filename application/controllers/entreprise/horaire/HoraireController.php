<?php

    class HoraireController extends CI_Controller{

        public function index(){
            $this->enregistrer();
        }

        public function horaireView(){
            $this->load->view('horaire_view');
        }

        public function get_horaire(){

            $idAgent=$this->input->get('id');
            $horaire = $this->HoraireModel->get_Horaire($idAgent);
		    $data['randomEntreprise'] = $horaire;
		    $this->load->view('',$data);
        }
        public function ajouter_horaire($data)
        {
            //insertion des donnees dans la base des donnees
            $this->db->insert('tb_horaire', $data);
        }
    

       
    }
?>