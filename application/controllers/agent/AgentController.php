<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller {

	public function index()
	{
		$this->load->view('ajouter_agent');
	}
}