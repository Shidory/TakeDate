<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rdvEntrepriseController extends CI_Controller {

	public function __construct(){
		parrent::__construct();
}

	//fonction dans le but de lister les rendezvous
	public function liste_rendez_vous_approuve()
	{
		$idAgent=1;
		$rdvPris=$this->RdvModel->afficherRdv($idAgent);
		$this->load->views('RdvDejaPris',compact('rdvPris'));
	}
}
