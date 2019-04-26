<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EntreprisesModel extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
    }


    public function reporterr_rdv($idRdv, $data)
    {

        //Requête de repport du rendez-vous
        $this->db->where('idRdv', $idRdv);
        $this->db->update('tb_rdv', $data);
    }
    public $tb_agent = 'tb_agent';

    public function can_login($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->where('pwd', $data['password']);
        $query = $this->db->get($this->tb_agent);

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_Entreprise()
    {
        //cette methode recupere tout les elements de la table tb_entreprise
        $this->db->select('*');
        return $this->db->get('tb_entreprise')->result_array();
    }

    public function get_Entreprise_Index()
    {
        //cette methode recupere tout les elements de la table tb_entreprise
        $this->db->select('*');
        $this->db->limit(3);
        return $this->db->get('tb_entreprise')->result_array();
    }

    public function get_Random_Entreprises()
    {
        //cette methode recupere une seule entreprise dans la table tb_entreprise d'une maniere aleatoire
        $this->db->select('*');
        $this->db->order_by('RAND()');
        $this->db->limit(1);
        return $this->db->get('tb_entreprise')->result_array();
    }
}
