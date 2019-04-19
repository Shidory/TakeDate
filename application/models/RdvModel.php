<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RdvModel extends CI_Model{
    
    public function prendre_rdv($data)
    {
        //insertion des donnees dans la base des données bd_rdv
        
        $this->db->insert('tb_rdv', $data);
    }

    
}
?>