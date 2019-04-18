<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RdvModel extends CI_Model{

    public function annulerRDV($idRdv){
    	$query=$this->db->select('NomClient, date, heure, dure')
						->from('tb_rdv')
						->join('tb_client, tb_rdv.idClient=tb_client.idClient')
						->where('idRdv=:idRdv')
						->get();
	}
}
?>
