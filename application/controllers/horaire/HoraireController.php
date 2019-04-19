<?php

    class HoraireController extends CI_Controller{

        public function index(){
            $this->enregistrer();
        }

        public function horaireView(){
            $this->load->view('horaire_view');
        }

        public function enregistrer(){

            $jour        = $this->input->post('jour');
            $heure_debut = $this->input->post('heureDebut');
            $heure_fin   = $this->input->post('heureFin');
            $idagent     = $this->session->userdata['id'];

            $this->HoraireModel->ajouterHoraire($data);
        }
    }
?>