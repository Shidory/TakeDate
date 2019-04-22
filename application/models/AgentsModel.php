<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AgentsModel extends CI_Model{
	//méthode dans le but de récuperer l'id de l'agent [Caleb]

    public function ajouter_agent($data)
    {
        //insertion des donnees dans la base des donnees
        
        $this->db->insert('tb_agent', $data);
    }
    public function repondre_commentaire($data)
    {
        //recuperation de l'id du commentaire client
        $ths->db->insert('tb_reponse_commentaire',$data);
    }
}
?>
