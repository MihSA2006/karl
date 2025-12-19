<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
// Only User
	class UserController extends CI_Controller {
		protected $user = NULL;

		public function __construct() {
			parent::__construct();
			$this->user = $this->session->userdata('user');
			if($this->user == NULL) {
				redirect(base_url() . 'Authentification');
			}
		}		
	}
?>