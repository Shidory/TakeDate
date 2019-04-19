<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->load->view('');
	}

	public function get_Entreprise()
	{
		$entreprise=$this->EntreprisesModel->get_Entreprise();
		$data['dataEntreprise']=$entreprise;
		$this->load->view('',$data);

	}
}