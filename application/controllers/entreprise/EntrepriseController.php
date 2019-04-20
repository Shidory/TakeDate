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
		
	}


	public function get_Entreprise()
	{
		// cette methode permet d'envoyer les informations  des entreprises à une vue
		$entreprise=$this->EntreprisesModel->get_Entreprise();
		$data['dataEntreprise']=$entreprise;
		$this->load->view('',$data);

	}

	public function get_Random_Entreprise()
	{
		//cette methode envoie les informations recuperée via la methode get_Random_Entreprises,d'une entreprise 
		//à une vue
		$random=$this->EntreprisesModel->get_Random_Entreprises();
		$data['dataEntreprises']=$random;
		
	}
}

	


