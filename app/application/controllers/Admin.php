<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once 'controllers/AuthController.php';

	class Admin extends AuthController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$data['title'] = "Back Office";
			$this->load->view('authentification_admin', $data);
		}

		public function log() {
			$this->load->model("Admin_model");
			try {
				$this->Admin_model->login();
				redirect(base_url());
			} catch(Exception $e) {
				$this->session->set_flashdata('error', $e->getMessage());
				redirect(base_url());
			}
		}
	}

?>