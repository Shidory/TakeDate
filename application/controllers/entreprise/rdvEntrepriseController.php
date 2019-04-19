<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rdvEntrepriseController extends CI_Controller {

	public function __construct(){
		parent::__construct();
}

	//fonction dans le but de lister les rendezvous
	public function liste_rendez_vous_approuve()
	{
		$idAgent=2;
		$data['rdvPris']=$this->RdvModel->afficherRdv($idAgent);
		$this->load->view('RdvDejaPris',$data);

	}
	public  function annuler_rdv_controller(){
		$idRdv=2;
		$etat="0";
		$data['rdvPris']=$this->RdvModel->annulerRDV($idRdv,$etat);var_dump($data);

	}
}
