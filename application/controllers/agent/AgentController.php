<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller {

	public function index()
	{
		//chargement de la page ajouter_agent dans la vue
		// var_dump($this->session->userdata);
		var_dump($this->session->userdata('id'));
		var_dump($this->session->userdata('email'));

		// foreach($users as $user){
		// 	echo $user;
		// }
		$this->load->view('agent');
	}
	public function ajouter_agent()
	{
		//recuperation des donnees dans la vue
		$nomAgent= $this->input->post('name');
		$telephone= $this->input->post('phone');
		$email= $this->input->post('email');
		// $photo= $this->input->post('photo');
		$username= $this->input->post('username');
		$pwd= $this->input->post('pwd');
		$pwdconf = $this->input->post('confpwd');
		$confpwd=$this->input->post('confpwd');
		$idEntreprise = $this->session->userdata('id');
		$idDept = 3;

		if($pwd == $confpwd){
			$pwd = sha1($pwd);
			$data = array(
				'nomAgent'=> $nomAgent,
				'telephone'=> $telephone,
				'email'=> $email,
				// 'photo'=> $photo,
				// 'username'=> $username,
				'pwd'=>sha1($pwd),
				'idEntreprise' => $idEntreprise,
				'idDept' => $idDept
			);
			$this->AgentsModel->ajouter_agent($data);
			redirect(base_url('/departement/DepartementController'));
		}
		else{
			$data['error'] = "mot de passe incorrect";
			$data['agents'] = $this->AgentsModel->get_Agent($idEntreprise);
			$this->load->view('setting', $data);
		}
				
		
	}

	public function modifier_agent(){

	}
	
}