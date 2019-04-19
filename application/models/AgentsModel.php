<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AgentsModel extends CI_Model{

    public function ajouter_agent($data)
    {
        //
        
        $this->db->insert('tb_agent', $data);
    }
}
?>