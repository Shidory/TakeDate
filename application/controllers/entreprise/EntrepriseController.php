<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->repporter_rdv();
	}

	#######################################################
	public function repporter_rdv(){

		$motif = $this->input->post("motif");
		$date = $this->input->post("date");
		$heure = $this->input->post("heure");
		$duree = $this->input->post("duree");
		$commentaire = $this->input->post("commentaire");

		if(isset($motif, $date, $heure, $duree, $commentaire)){

			$data['data'] = array(
				"motif" => $this->motif;
				"date" => $this->date;
				"heure" => $this->heure;
				"duree" => $this->duree;
				"commentaire" => $this->commentaire;
			);

			$this->EntrepriseModel->reporter_rdv($data);
		}
		
	}

	#######################################################
}