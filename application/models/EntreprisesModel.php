<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class EntreprisesModel extends CI_Model{

        public $tb_agent = 'tb_agent';
        
        public function can_login($data){
            $this->db->where('username', $data['username']);
            $this->db->where('pwd', $data['password']);
            $query = $this->db->get($this->tb_agent);

            if($query->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>
