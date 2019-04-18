<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AgentsModel extends CI_Model{

    public function ajouter_agent()
    {
        $this->db->set('nomAgent', $this->input->post('nom'));
        $this->db->set('telephone', $this->input->post('telephone'));
        $this->db->set('email', $this->input->post('email'));
        $this->db->set('photo', $this->input->post('photo'));
        $this->db->set('username', $this->input->post('nom_utilisateur'));
        $this->db->set('pwd', $this->input->post('mot_de_passe '));
        $this->db->insert('tb_agent');
    }
}
?>