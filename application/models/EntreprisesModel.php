<?php

class EntreprisesModel extends CI_Model{


    public function get_Entreprise()
    {
        $this->db->select('*');
        return $this->db->get('tb_entreprise')->result_array();
    }
    
}
?>