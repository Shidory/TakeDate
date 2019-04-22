<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('horaire/horaire_view');

	}

	public function enregistrer(){

		$jour        = $this->input->post('jour');
		$heure_debut = $this->input->post('heuredebut');
		$heure_fin   = $this->input->post('heurefin');
		// $this->session->userdata['id']
		$idagent     =  1 ;

		if($this->form_validation->run() == FALSE){
			echo "hey";
		}
		else{
			echo "salut";
		}
		// $data        = array(
		//                     'idAgent'       => $idagent,
		//                     'jour'          => $jour,
		//                     'heureDebut'    => $heure_debut,
		//                     'heureFin'      => $heure_fin
		//                );

		// $this->HoraireModel->ajouter_horaire($data);
	}
}
