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
    }

    #######################################################
?>

        
    
