<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller {

	public function index()
	{
		$this->load->view('ajouter_agent');
	}
	public function ajouter_agent()
	{
		$nomAgent= $this->input->post('nomAgent');
		$telephone= $this->input->post('telephone');
		$email= $this->input->post('email');
		$photo= $this->input->post('photo');
		$username= $this->input->post('username');
		$pwd= $this->input->post('pwd');
		
	}
}