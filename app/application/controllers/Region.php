<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once 'controllers/UserController.php';

	class Region extends UserController {
		public function __construct() {
			parent::__construct();
		}

		public function index($idCountry = null) {
			if($idCountry == null) {
				redirect(base_url());
			}
			$this->country($idCountry);
		}

		public function country($idCountry) {
			$this->load->model('Country_model');
			$data['country'] = $this->Country_model->getCountry($idCountry);
			$data['title'] = "Welcome";
			$data['view'] = ['home_page.php'];
			$data['countries'] = $this->Country_model->getCountries();
			$data['next_link'] = base_url() . "region";
			$this->load->view('front_template', $data);
		}
	}

?>