<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EntreprisesModel extends CI_Model{

    public function __construct(){

        parent::__construct();
        $table_rdv = "tb_rdv";
    }
    public function reporter_rdv($data){

        $request = $this->db->insert('', $data);;
    }
}
?>