<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AgentsModel extends CI_Model{
	//méthode dans le but de récuperer l'id de l'agent [Caleb]

    public function ajouter_agent($data)
    {
        //insertion des donnees dans la base des donnees
        $this->db->insert('tb_agent', $data);
    }

    public function get_Agent($idEntreprise)
    {
        $this->db->select('*');
        $this->db->where('idEntreprise',$idEntreprise);
        
        return $this->db->get('tb_agent')->result();
    }
       
    public function repondre_commentaire($data)
    {
        //recuperation de l'id du commentaire client
        $this->db->insert('tb_reponse_commentaire',$data);
    }

    public function verification($data){

        $this->db->select('*')
                 ->where('email', $data['email'])
                 ->where('pwd', $data['pwd']);
         $req = $this->db->get('tb_entreprise');

        if($req->num_rows() > 0){
            return True;
        }

        else{
            return False;   
        }
        
    }
}
?>
