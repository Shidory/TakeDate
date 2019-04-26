<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class AgentsModel extends CI_Model{

    public function ajouter_agent($data)
    {
        //insertion des donnees dans la base des donnees
        $this->db->insert('tb_agent', $data);
    }

    public function get_Agent($idEntreprise)
    {
        $this->db->select('*');
        $this->db->where('idEntreprise',$idEntreprise);
        return $this->db->get('tb_agent')->result_array();
       
    }
}
?>