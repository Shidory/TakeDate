<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DepartementModel extends CI_Model{

    public function enregister($data){
        $this->db->insert('tb_departement', $data);
    }
}
?>