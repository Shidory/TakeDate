<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class HoraireModel extends CI_Model{

        public function __construct(){
            parent::__construct();
        }

        // =======================================================================>
        public function ajouter_horaire($data){
            $this->db->insert('tb_horaire',$data);
        }
        
        // =======================================================================>
        public function get_horaire($idAgent){
            // recuperation de l'horaire par rapport a un agent
            $req = $this->db->select('h.jour, h.heure_debut, h.heure_fin, a.nomAgent')
                     ->from('tb_horaire as h')
                     ->join('tb_agent as a', 'a.idAgent = h.idAgent')
                     ->get();  

            return $req;
        }
    }
?>