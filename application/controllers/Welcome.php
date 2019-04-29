<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		$this->load->view('horaire/horaire_view');
		// $this->load->view('login/login');

		// $id_rdv = 1;
		// $this->load->model("EntreprisesModel");
		// $data["fetch_data"] = $this->EntreprisesModel->fetch_data();
		// $data["rdv_data"] = $this->EntreprisesModel->accepter_refuser_rdv($id_rdv);
		// $this->load->view('accepter_view', $data);


		

		//chargement de la vue horaire
		// $this->load->view('repondre_commentaire');
	}

	public function enregistrer(){

		$jour        = $this->input->post('jour');
		$heure_debut = $this->input->post('heuredebut');
		$heure_fin   = $this->input->post('heurefin');
		// $this->session->userdata['id']
		$idagent     =  1 ;
		
		
		if($this->form_validation->run()){
			echo "hey";
		}
		else{
			echo "salut";
		}
		// $data        = array(
		//                     'idAgent'       => $idagent,
		//                     'jour'          => $jour,
		//                     'heureDebut'    => $heure_debut,
		//                     'heureFin'      => $heure_fin
		//                );

		// $this->HoraireModel->ajouter_horaire($data);
	}
}
