<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RdvModel extends CI_Model{

	//afficher les rendez vous en fonction des agents [Caleb]
    public function afficherRDV($idAgent)
	{
		$this->load-database();
    	$query=$this->db->select('NomClient, date, heure, dure')
						->from('tb_rdv')
						->join('tb_client, tb_rdv.idClient=tb_client.idClient')
						->where('idAgent=:idAgent')
						->get();


		foreach ($query->result() as $row)
		{
			echo $row->title;
		}


	}
	//cette methode parle d'elle même! j'espère que cela passera sans me prendre la tête [Caleb]
	public  function annulerRDV($idRdv,$etat)
	{
		$data = array(
			'etat' => $etat
		);

		$this->db->where('idRdv', $idRdv);
		$this->db->update('tb_rdv', $data);
	}
}
?>
