<?php

    class EntreprisesModel extends CI_Model{

        $tb_agent = 'tb_agent';

        public function can_login($data){
            $this->db->where('username', $data['username']);
            $this->db->where('pwd', $data['password']);
            $query = $this->db->get($this->tb_agent);
        }
    }