<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->repporter_rdv();
	}

	#######################################################
	public function repporter_rdv(){

		$idRdv = $this->input->get("idRdv");
		$idClient = $this->input->get("idClient");
		$idEntreprise = $this->input->get("idEntreprise");

		$motif = $this->input->post("motif");
		$date = $this->input->post("date");
		$heure = $this->input->post("heure");
		$duree = $this->input->post("duree");
		$commentaire = $this->input->post("commentaire");

		if(isset($motif, $date, $heure, $duree, $commentaire)){

			$data = array(

				"idClient" => $idClient,
				"idEntreprise" => $idEntreprise,
				"motif" => $motif,
				"date" => $date,
				"heure" => $heure,
				"duree" => $duree,
				"etat" => "2",
				"commentaire" => $commentaire
			);

			try{

				$this->EntreprisesModel->reporter_rdv($data);
			}
			catch(Exception $e){

				redirect('reporter_view');
			}
			
		}
		
	}

	#######################################################
}