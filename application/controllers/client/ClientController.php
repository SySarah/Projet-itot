<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {

	public function index()
	{
		$this->annuler_rdv();
	}

	public function annuler_rdv(){

		$id = $this->input->get("id");
		$idClient = $this->input->get("idClient");
		$idEntrprise = $this->input->get("idEntrprise");
		$motif = $this->input->get("motif");
		$date = $this->input->get("date");
		$duree = $this->input->get("duree");
		$commentaire= $this->input->get("commentaire");
		;
		if (isset($id)){

			$data = array (
				'idClient'=>$idClient,
				'idEntreprise'=>$idEntrprise,
				'motif'=>$motif,
				'date'=>$date,
				'duree'=>$duree,
				'etat' => '0',
				'commentaire'=>$commentaire;
			)
			$this->ClientModel->annuler_rdv($id,$data)

		}
	}
}