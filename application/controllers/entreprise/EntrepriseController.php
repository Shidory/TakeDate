<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		
		$this->load->model("EntreprisesModel");
		$data["fetch_data"] = $this->EntreprisesModel->fetch_data();
		$data["rdv_data"] = $this->EntreprisesModel->accepter_refuser_rdv($id_rdv);
		$this->load->view('accepter_view', $data);
		$this->accepter_controller();
	}

	public function update_data()
	{
		$id_rdv = $this->uri->segment(3);
		$this->load->model("EntreprisesModel");
		$data['rdv_data'] = $this->EntreprisesModel->accepter_refuser_rdv($id_rdv) ;
		$data["fetch_data"] = $this->EntreprisesModel->fetch_data();
		$this->load->view('accepter_view', $data);
	}

	//La methode change l'etat d'un rendez-vous du cote Entreprise
	public function accepter_refuser_rdv(){
		$id = $this->input->get('id');
		$state = $this->EntreprisesModel->get_state($id);
		$stateValue = $this->input->get('state');

		if($stateValue == 1){
			$newState = "1";
	
			$data = array(
				'idRdv' => $id,
				'etat' => $newState
			);
	
			$this->EntreprisesModel->update_data($id, $data);

		}
		else{
			$newState = "0";
	
			$data = array(
				'idRdv' => $id,
				'etat' => $newState
			);
	
			$this->EntreprisesModel->update_data($id, $data);

		}
		redirect(base_url());
	}
	
	public function updated(){
		$this->index();
	}
}
?>