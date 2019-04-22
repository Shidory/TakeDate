<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		
		$this->load->model("EntreprisesModel");
		$data["fetch_data"] = $this->EntreprisesModel->fetch_data();
		$this->load->view('accepter_view', $data);
		$this->accepter_controller();
	}
	public function update_data()
	{
		$id_rdv = $this->uri->segment(3);
		$this->load->model("EntreprisesModel");
		$data["rdv_data"] = $this->EntreprisesModel->accepter_refuser_rdv($id_rdv);
		$data["fetch_data"] = $this->EntreprisesModel->fetch_data();
		$this->load->view('accepter_view', $data)
	}
	public function form_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("motif", "motif",'required|alpha');
		$this->form_validation->set_rules("date", "date",'required|alpha');
		$this->form_validation->set_rules("heure", "heure",'required|alpha');
		$this->form_validation->set_rules("duree", "duree",'required|alpha');
		$this->form_validation->set_rules("etat", "etat",'required|alpha');
		$this->form_validation->set_rules("commentaire", "commentaire",'required|alpha');
		if($this->form_validation->run()){
			$this->load->model("EntreprisesModel");
			$date = array(
				"motif"		=>$this->input->post("motif"),
				"date"		=>$this->input->post("date"),
				"heure"		=>$this->input->post("heure"),
				"duree"		=>$this->input->post("duree"),
				"etat"		=>$this->input->post("etat"),
				"commentaire"=		=>$this->input->post("commentaire")
			);
			if($this->input->post("update")){
				$this->EntreprisesModel->update_data($data, $this->input->post("hidden_id"));
				redirect(base_url() . "EntrepriseController/updated");
			}
			$this->EntreprisesModel->
		}
	}
	
	public function updated(){
		$this->index();
	}
}
?>