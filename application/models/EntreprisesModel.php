<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EntreprisesModel extends CI_Model{

    #######################################################
    public function __construct(){

        parent::__construct();
    }

    #######################################################
    public function reporter_rdv($data){

        $this->db->where('id', $data[0]);
        $this->db->update('tb_rdv', $data);
    }

    #######################################################
}
?>