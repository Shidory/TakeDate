<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->repporterRdv();
	}

	#######################################################
	public function repporterRdv(){

		$idRdv = $this->input->get("idRdv");
		
		$motif = $this->input->post("motif");
		$date = $this->input->post("date");
		$heure = $this->input->post("heure");
		$duree = $this->input->post("duree");
		$commentaire = $this->input->post("commentaire");

		if(isset($motif, $date, $heure, $duree, $commentaire)){

			$data = array(

				"motif" => $motif,
				"date" => $date,
				"heure" => $heure,
				"duree" => $duree,
				"etat" => "2",
				"commentaire" => $commentaire
			);

			try{

				$this->EntreprisesModel->reporterRdv($idRdv, $data);
			}
			catch(Exception $e){

				redirect('reporter_view');
			}
			
		}
		
	}

	#######################################################
}