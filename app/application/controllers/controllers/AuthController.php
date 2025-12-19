<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
// Authentified user are not allowed anymore
	class AuthController extends CI_Controller {
		protected $user = NULL;

		public function __construct() {
			parent::__construct();
			$this->user = $this->session->userdata('user');
			$this->admin = $this->session->userdata('admin');
			if($this->user != NULL || $this->admin != NULL) {
				redirect(base_url());
			}
		}		
	}
?>