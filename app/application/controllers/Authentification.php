<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once 'controllers/AuthController.php';

	class Authentification extends AuthController {
		public function __construct() {
			parent::__construct();
			$user = $this->session->userdata('user');
			if($user != NULL) {
				redirect(base_url());
			}
		}

		public function index() {
			$this->load->model('User_model');
			$data['genders'] = $this->User_model->getGenders();
			$this->load->view('authentification', $data);
		}

		public function log() {
			$this->load->model('Auth_model');
			try {
				$this->Auth_model->login();
				redirect(base_url());
			} catch (Exception $e) {
				$this->session->set_flashdata('error', $e->getMessage());
				redirect(base_url());
			}
		}

		public function sign() {
			$this->load->model('Auth_model');
			try {
				$this->Auth_model->signin();
				redirect(base_url());
			} catch (Exception $e) {
				$this->session->set_flashdata('error', $e->getMessage());
				redirect(base_url());
			}
		}
	}
?>