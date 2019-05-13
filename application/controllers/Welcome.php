<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$entreprise = $this->EntreprisesModel->get_Entreprise_Index();
		$data['dataEntreprise'] = $entreprise;
		$this->load->view('header');
		$this->load->view('index',$data);
		// $this->load->view('rdv');
	}
	public function list_entreprise()
	{
		$entreprise = $this->EntreprisesModel->get_Entreprise();
		$random = $this->EntreprisesModel->get_Random_Entreprises();
		$data['dataEntreprise'] = $entreprise;
		$data['randomEntreprise'] = $random;
		$this->load->view('listentreprise',$data);
	}

	public function login()
	{
		$data['error'] = "";
		$this->load->view('login',$data);
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
		$agents = $this->AgentsModel->get_Agent($idEntreprise);
		$horaires = array();
		
		foreach($agents as $agent){
			$idAgent = $agent->idAgent;
			$horaires[] = $this->HoraireModel->get_Horaire($idAgent);
			
		}
		$random = $this->EntreprisesModel->get_Random_Entreprises();
		$data['randomEntreprise'] = $random;
		$data['agent'] = $agents;
		$data['horaire'] = $horaires;

		//$data['horaire'] = $horaire;
		$this->load->view('entreprise',$data);
	
	}

	public function rdv()
	{
		$this->load->view('rdv');
	}
	public function agent()
	{
		$this->load->view('agent');
	}
	public function enregistrer()
	{
		$agent=1;
		$this->load->helper(array('form', 'url'));
		$data = array(
			'idAgent' => $agent,
			'titre' => $this->input->post('titre'),
			'note' => $this->input->post('note'),
			'date' => $this->input->post('format'),
			'HeureFin' => $this->input->post('fin'),
			'HeureDebut' => $this->input->post('deb'),
			'Nbrdv' => $this->input->post('nbrdv')
		);
		$this->HoraireModel->ajouter_horaire($data);
		echo 'ok';
	}
}


