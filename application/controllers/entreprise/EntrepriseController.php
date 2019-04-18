<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->repporter_rdv();
	}

	#######################################################
	public function repporter_rdv(){

		$this->input->post("motif");
	}

	#######################################################
}