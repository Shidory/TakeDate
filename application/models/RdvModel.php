<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RdvModel extends CI_Model{

	public $idRdv;
	public $idClient;
	public $idEntreprise;
	public $motif;
	public $date;
	public $heure;
	public $duree;
	public $etat;
	public $commentaire;

	public function __construct()
	{
		parrent::__construct();
		$this->load->database();
	}

	//afficher les rendez vous en fonction des agents [Caleb]
    public function afficherRDV($idAgent)
	{

    	//$query=$this->db->select('NomClient, date, heure, dure')
		//				->from('tb_rdv')
		//				->join('tb_client, tb_rdv.idClient=tb_client.idClient')
		//				->where('idAgent=:idAgent')
		//				->get();
    	$this->db->select('NomClient, date , heure, dure');
    	$this->where('idAgent='.$idAgent);
    	$this->where('idClient=idClient');
    	return $this->db-get('tb_rdv, tb_client')->result_array();
    	//return $query->result();


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
