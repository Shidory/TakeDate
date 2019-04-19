<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->load->view('accepter_view');
	}
	public function accepter_controller(1)
	{
		if(isset($motif, $date, $heure, $duree,$etat, $commentaire)){
			$idClient = 2;
			$idEntreprise = 2;
			$motif = 'marché';
			$date = '2019-04-25';
			$heure = '07:30:00';
			$duree = '3heures';
			$etat = '1';
			$commentaire = 'okey'; 
			$data = array(
				'idClient' => $idClient,
				'idEntreprise' => $idEntreprise,
				'motif' => $motif,
				'date' => $date,
				'heure' => $heure,
				'duree' => $duree,
				'etat' => "1",
				'commentaire' => $commentaire
			);
		}
		$this->EntreprisesModel->accepter_refuser_rdv(1, $data);	
	}
	public function refuser_controller($id)
	{
		if(isset($id, $motif, $date, $heure, $duree, $etat, $commentaire)){
			$data = array(
				'idRdv' => $this->input->post('idRdv'),
				'idClient' => $this->input->post('idClient'),
				'idEntreprise' => $this->input->post('idEntreprise'),
				'motif' => $this->input->post('motif'),
				'date' => $this->input->post('date'),
				'heure' => $this->input->post('heure'),
				'duree' => $this->input->post('duree'),
				'etat' => $this->input->post('etat'),
				'commentaire' => $this->input->post('commentaire')
			);
		}
		$this->EntreprisesModel->accepter_refuser_rdv($id, $data);	
	}
}
?>