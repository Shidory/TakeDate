<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RdvModel extends CI_Model{

	//afficher les rendez vous en fonction des agents
    public function afficherRDV($idAgent){
    	$query=$this->db->select('NomClient, date, heure, dure')
						->from('tb_rdv')
						->join('tb_client, tb_rdv.idClient=tb_client.idClient')
						->where('idAgent=:idAgent')
						->get();
	}
	public  function annulerRDV(){

	}
}
?>
