<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EntrepriseController extends CI_Controller
{

	public function index(){

		$this->load->model("EntreprisesModel");
		$data["fetch_data"] = $this->EntreprisesModel->fetch_data();
		$data["rdv_data"] = $this->EntreprisesModel->accepter_refuser_rdv($id_rdv);
		$this->load->view('accepter_view', $data);
		$this->accepter_controller();

		$this->email->initialize(array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.sendgrid.net',
			'smtp_user' => 'sendgridusername',
			'smtp_pass' => 'sendgridpassword',
			'smtp_port' => 587,
			'crlf' => "\r\n",
			'newline' => "\r\n"
		  ));
	}

	public function update_data(){

		$id_rdv = $this->uri->segment(3);
		$this->load->model("EntreprisesModel");
		$data['rdv_data'] = $this->EntreprisesModel->accepter_refuser_rdv($id_rdv) ;
		$data["fetch_data"] = $this->EntreprisesModel->fetch_data();
		$this->load->view('accepter_view', $data);
	}

	//La methode change l'etat d'un rendez-vous du cote Entreprise
	public function accepter_refuser_rdv(){
		$id = $this->input->get('id');
		$state = $this->EntreprisesModel->get_state($id);
		$stateValue = $this->input->get('state');

		if($stateValue == 1){
			$newState = "1";
	
			$data = array(
				'idRdv' => $id,
				'etat' => $newState
			);
	
			$this->EntreprisesModel->update_data($id, $data);
			$this->reporter_rdv();

		}
		else{
			$newState = "0";
	
			$data = array(
				'idRdv' => $id,
				'etat' => $newState
			);
	
			$this->EntreprisesModel->update_data($id, $data);
		}
		redirect(base_url());
	}

	#######################################################
	public function reporter_rdv(){

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
				$this->notifier("sarahddiur@gmail.com");
			}
			catch(Exception $e){

				redirect('reporter_view');
			}
		}

	}
	
	#######################################################
	public function notifier($adresse){

		$message = "votre rendez-vous a été reporté";
		$this->email->clear();
		$this->email->from('simonmwepu@gmail.com');
		$this->email->reply_to('sarahddiur@gmail.com');
		$this->email->to($adresse);
		$this->email->subject('Double petrova');
		$this->email->message($message);
		if($this->email->send()===TRUE){
			return true;
		}
		else{
			return false;
		}
	
		/*$emails = array('victim1@victim.com', 'victim2@victim.com');

		foreach($emails as $victim){

			$this->send_spam($victim)
		}*/
	}

	#######################################################

	public function repporter_rdv()
	{

		//Réccupération des données venant du formulaire
		$idRdv = $this->input->get("idRdv");

		$motif = $this->input->post("motif");
		$date = $this->input->post("date");
		$heure = $this->input->post("heure");
		$duree = $this->input->post("duree");
		$commentaire = $this->input->post("commentaire");

		//Vérification de l'existance des clés fournies
		if (isset($motif, $date, $heure, $duree, $commentaire)) {

			$data = array(

				"motif" => $motif,
				"date" => $date,
				"heure" => $heure,
				"duree" => $duree,
				"etat" => "2",
				"commentaire" => $commentaire
			);

			try {

				//Appel de la méthdode reporter_rdv en lui passant  
				//l'id et le tableau des valeurs en paramètre
				$this->EntreprisesModel->reporter_rdv($idRdv, $data);
			} catch (Exception $e) {

				redirect('reporter_view');
			}
		}
	}


	public function modifier_rdv()
	{

		//Réccupération des données venant du formulaire
		$idRdv = $this->input->get("idRdv");
		$idClient = $this->input->get("idClient");
		$idEntreprise = $this->input->get("id");

		$motif = $this->input->post("motif");
		$date = $this->input->post("date");
		$heure = $this->input->post("heure");
		$duree = $this->input->post("duree");
		$commentaire = $this->input->post("commentaire");

		//Vérification de l'existance des clés fournies
		if (isset($idClient, $idEntreprise, $motif, $date, $heure, $duree, $commentaire)) {

			$data = array(

				"idClient" => $idClient,
				"idEntreprise" => $idEntreprise,
				"motif" => $motif,
				"date" => $date,
				"heure" => $heure,
				"duree" => $duree,
				"etat" => "1",
				"commentaire" => $commentaire
			);
			try {

				//Appel de la méthdode modifier_rdv en lui passant  
				//l'id et le tableau des valeurs en paramètre
				$this->EntreprisesModel->modifier_rdv($idRdv, $data);
			} catch (Exception $e) {
	
				redirect('modiifer_view');
			}
		}
	}

	public function get_Entreprise()
	{
		// cette methode permet d'envoyer les informations  des entreprises à une vue
		$entreprise = $this->EntreprisesModel->get_Entreprise();
		$data['dataEntreprise'] = $entreprise;
		$this->load->view('', $data);
		
	}
	
	public function get_Random_Entreprise()
	{
		//cette methode envoie les informations recuperée via la methode get_Random_Entreprises,d'une entreprise 
		//à une vue
		$random = $this->EntreprisesModel->get_Random_Entreprises();
		$data['dataEntreprises'] = $random;
	}

}

?>

