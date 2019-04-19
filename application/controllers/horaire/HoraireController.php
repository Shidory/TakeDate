<?php

    class HoraireController extends CI_Controller{

        public function horaireView(){
            $this->load->view('horaire_view');
        }

        public function enregistrer(){

            $jour = $this->input->post('jour');
            $heure_debut = $this->input->post('heureDebut');
        }
    }
?>