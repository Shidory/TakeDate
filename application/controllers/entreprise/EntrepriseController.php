<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->load->view('accepter_view');
	}
	public function accepter_refuser($id)
	{
		$choix = $_POST['choix'];
		$this->_rules();
		 
		$data = array(
					'choix' => $_POST['choix']
					);
		for($i= 0, $i < $data.length(), $i++){
			if($data[i] = 'accepter')
			$this->EntreprisesModel->accepter_refuser_rdv($id, $data);
		}
		
	}
}