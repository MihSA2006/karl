<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once 'controllers/BothController.php';

	class Country extends BothController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->load->model('User_model');
			$this->load->model('Admin_model');
			$this->load->model('Country_model');
			$data['title'] = "Welcome";
			$data['view'] = ["interactive_map.php"];
			try {
				$data['user'] = $this->User_model->getUser($this->user);
			} catch(Exception $e) {
				$data['user'] = $this->Admin_model->getAdmin($this->admin);
				$data['isAdmin'] = true;
			}
			$data['countries'] = $this->Country_model->getCountries();
			if(isset($data['isAdmin'])) {
				$data['next_link'] = base_url() . "Suggestion/";
			} else {
				$data['next_link'] = base_url() . "Region/";
			}
			$this->load->view('front_template', $data);
		}

		public function logout() {
			$this->load->model('Auth_model');
			try {
				$this->Auth_model->logout();
				redirect(base_url());
			} catch (Exception $e) {
				$this->session->set_flashdata('error', $e->getMessage());
				redirect(base_url());
			}
		}	
	}

?>