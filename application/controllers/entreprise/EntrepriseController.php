<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

	public function index()
	{
		$this->load->view('accepter_view');
	}
	public function accepter_refuser($id, $data)
	{
		$this->_rules();
		
		
	}
}