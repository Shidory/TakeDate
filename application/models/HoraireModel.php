<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class HoraireModel extends CI_Model{

        public function ajouter_horaire($data){
            $this->db->insert('tb_horaire',$data);
        }
        
        public function get_horaire(){
            
        }
    }
?>