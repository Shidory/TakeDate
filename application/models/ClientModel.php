<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ClientModel extends CI_Model{

    public function annuler_rdv($id,$data){

      $this->db->update('tb_rdv', $data);
      $this->db->where('id',$id);  
    }
}
?>