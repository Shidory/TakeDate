<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$entreprise = $this->EntreprisesModel->get_Entreprise_Index();
		$data['dataEntreprise'] = $entreprise;
		$this->load->view('index',$data);
	}
	public function listentreprise()
	{
		$entreprise = $this->EntreprisesModel->get_Entreprise();
		$random = $this->EntreprisesModel->get_Random_Entreprises();
		$data['dataEntreprise'] = $entreprise;
		$data['randomEntreprise'] = $random;
		$this->load->view('listentreprise',$data);
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function test()
	{
		$this->load->view('test');
	}
	public function entreprise()
	{
		$idEntreprise=$this->input->get('id');
		$agent = $this->AgentsModel->get_Agent($idEntreprise);
		
		$random = $this->EntreprisesModel->get_Random_Entreprises();
		$data['randomEntreprise'] = $random;
		$data['agent'] = $agent;
		$this->load->view('entreprise',$data);
	}
	public function rdv()
	{
		$this->load->view('rdv');
		
	}

	public function enregistrer(){

		$jour        = $this->input->post('jour');
		$heure_debut = $this->input->post('heuredebut');
		$heure_fin   = $this->input->post('heurefin');
		// $this->session->userdata['id']
		$idagent     =  1 ;

		if($this->form_validation->run() == FALSE){
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
