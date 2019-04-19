<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller {

	public function index()
	{
		//chargement de la page ajouter_agent dans view
		$this->load->view('ajouter_agent');
	}
	public function ajouter_agent()
	{
		//
		$nomAgent= $this->input->post('nomAgent');
		$telephone= $this->input->post('telephone');
		$email= $this->input->post('email');
		$photo= $this->input->post('photo');
		$username= $this->input->post('username');
		$pwd= $this->input->post('pwd');
		$confpwd=$this-><input->post('confpwd');
		
		if($this->form->run()){
		$nomAgent= $this->input->post('nomAgent');
		$telephone= $this->input->post('telephone');
		$email= $this->input->post('email');
		$photo= $this->input->post('photo');
		$username= $this->input->post('username');
		$pwd= $this->input->post('pwd');
		$confpwd=$this-><input->post('confpwd');

		if($pwd === $confpwd){
			$data = array(
				'nom'=> $nomAgent,
				'telephone'=> $telephone,
				'email'=> $email,
				'photo'=> $photo,
				'user'=> $username,
				'pass'=>sha1($pwd) //hachage du pwd
			);
			$this->AgentModel->ajouter_agent($data);//insertion des donnees
			redirect(base_url('login'));// redirection vers la page login
		}
		}
	}
}