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
		parent::__construct();
	}

	//afficher les rendez vous en fonction des agents [Caleb]
    public function afficherRDV($idAgent)
	{

    	$query=$this->db->select('*')
						->from('tb_rdv')
						->join('tb_client, tb_client.idClient=tb_rdv.idClient')
						->join('tb_agent, tb_agent.idEntreprise=tb_rdv.idEntreprise')
						->where(array('tb_agent.idAgent='.$idAgent))
						->where('idAgent=:idAgent')
						->get();
		return $query->get->result();
    	/*$this->db->select('NomClient, date , heure, dure');
    	//$this->db->where('idRdv='.$idRdv);
    	return $this->db-get('tb_rdv, tb_client')->result_array();*/
	}


	//cette methode parle d'elle même! j'espère que cela passera sans me prendre la tête [Caleb]
	public  function annulerRDV($idRdv,$etat)
	{
		$data = array(
			'etat' => $etat
		);

		$this->db->where('idRdv', $idRdv);
		$this->db->update('tb_rdv', $data);
		redirect('view/RdvDejaPris');
	}
	public function get_id_rdv(){

	}
}
?>
