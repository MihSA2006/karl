<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
// Need any type of login
	class BothController extends CI_Controller {
		protected $user = NULL;
		protected $admin = NULL;

		public function __construct() {
			parent::__construct();
			$this->user = $this->session->userdata('user');
			$this->admin = $this->session->userdata('admin');
			if($this->user == NULL && $this->admin == NULL) {
				redirect(base_url() . 'Authentification');
			}
		}		
	}
?>