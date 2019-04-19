<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {

	public function index()
	{
		$this->annuler_rdv();
	}

	public function annuler_rdv(){

		$id = $this->input->get("id");
		
		if (isset($id)){

			$this->ClientModel->annuler_rdv($id,$etat);
		}
	}
}