<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class HoraireModel extends CI_Model{

        public function ajouterHoraire($data){
            $this->db->insert('tb_horaire',$data);
        }
        public function get_Agent()
        {
            $this->db->select('*');
            return $this->db->get('tb_agent')->result_array();
        }
    }
?>