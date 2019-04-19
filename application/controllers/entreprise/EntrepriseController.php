<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class EntrepriseController extends CI_Controller {

		public function index()
	{
		$this->repporter_rdv();
	}
	public function repporter_rdv(){

		//Réccupération des données venant du formulaire
		$idRdv = $this->input->get("idRdv");
		
		$motif = $this->input->post("motif");
		$date = $this->input->post("date");
		$heure = $this->input->post("heure");
		$duree = $this->input->post("duree");
		$commentaire = $this->input->post("commentaire");

		//Vérification de l'existance des clés fournies
		if(isset($motif, $date, $heure, $duree, $commentaire)){

			$data = array(

				"motif" => $motif,
				"date" => $date,
				"heure" => $heure,
				"duree" => $duree,
				"etat" => "2",
				"commentaire" => $commentaire
			);

			try{

				//Appel de la méthdode reporter_rdv en lui passant  
				//l'id et le tableau des valeurs en paramètre
				$this->EntreprisesModel->reporter_rdv($idRdv, $data);
			}
			catch(Exception $e){

				redirect('reporter_view');
			}
			
		}
<<<<<<< HEAD
	}
=======
		
	}


	public function get_Entreprise()
	{
		// cette methode permet d'envoyer les information  de l'entreprise à une vue
		$entreprise=$this->EntreprisesModel->get_Entreprise();
		$data['dataEntreprise']=$entreprise;
		$this->load->view('',$data);

	}
}
<<<<<<< HEAD
>>>>>>> cb147529e0f4a52b7e4ee8784e03eb8538bff1cb
=======

	


>>>>>>> 52e1207863cfd6b19ea4ded33d2e02651dce1b64
