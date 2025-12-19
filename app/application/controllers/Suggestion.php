<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once 'controllers/AdminController.php';

	class Suggestion extends AdminController {
		public function __construct() {
			parent::__construct();
		}

		public function index($idCountry = NULL) {
			if($idCountry == NULL) {
				redirect(base_url());
			}
			$this->country($idCountry);
			// $this->call($idCountry);
		}

		public function country($idCountry) {
			$this->load->model('Country_model');
			$this->load->model('Domain_model');
			$data['country'] = $this->Country_model->getCountry($idCountry);
			$data['domains'] = $this->Domain_model->getDomains($idCountry);
			$data['title'] = $data["country"]["countryName"];
			$data['view'] = ['suggestion_page.php'];
			$data['next_link'] = base_url() . "region";
			$this->load->view('front_template', $data);
		}

		public function fetch_suggestions() {
			$idCountry = $this->input->post("idCountry");
			$this->load->model("Country_model");
			$this->load->model("python_api_model");
			$data["country"] = $this->Country_model->getCountry($idCountry);
			$result = $this->python_api_model->call_python_api($data);

			$html = $this->load->view("partials/suggestion_card.php", $result, true);

			echo $html;
		}
	}

?>