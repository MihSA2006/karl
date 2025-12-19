<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
// Only Admin
	class AdminController extends CI_Controller {
		protected $admin = NULL;

		public function __construct() {
			parent::__construct();
			$this->admin = $this->session->userdata('admin');
			if($this->admin == NULL) {
				redirect(base_url().'admin');
				// redirect(base_url().'denied');
			}
		}		
	}
?>