<?php
	if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

	class Admin_model extends CI_Model {
		public function login() {
			$adminName = 	$this->input->post('adminName');
			$password = 	$this->input->post('password');

			$admin = $this->db
				->from('Admin')
				->where('adminName', $adminName)
				->where('password', SHA1($password))
				->get()->result_array();

			if(count($admin) != 1) {
				throw new Exception("adminName or password incorrect.");
			}
			$admin = $admin[0];
			$this->session->set_userdata('admin', $admin['idAdmin']);
		}

		public function getAdmin($idAdmin) {
			$admin = $this->db->where('idAdmin', $idAdmin)->get('Admin')->result_array();
			if(count($admin) != 1) {
				throw new Exception("Admin of id " . $idAdmin. " not found.");
			}
			return $admin[0];
		}
	}
?>