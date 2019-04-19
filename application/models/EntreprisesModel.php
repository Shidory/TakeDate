<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class EntreprisesModel extends CI_Model{

    public function __construct(){

        parent::__construct();
    }

    #######################################################
    public function reporterr_rdv($idRdv, $data){

        //Requête de modification du rendez-vous
        $this->db->where('idRdv', $idRdv);
        $this->db->update('tb_rdv', $data);
    }

    #######################################################
    public $tb_agent = 'tb_agent';
        
        // Fonction de permettant l'authentification
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

        // Fonction permettant de recupérer des données dans la base
        public function get_db_data($username){
            
            $this->db->select('idAgent');
            $this->db->select('pwd');
            $this->db->where('username', $username);
            $query = $this->db->get($this->tb_agent);
            
            if($query->num_rows() > 0){
                return $query->row();
            }
            else{
                return false;
            }
        }
    }
?>

        
    
