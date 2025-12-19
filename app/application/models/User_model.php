<?php
	if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

	class User_model extends CI_Model {
		public function getGenders() {
			return $this->db->order_by('idGender')->get('gender')->result_array();
		}

		public function getUser($idUser) {
			$user = $this->db->where('idUser', $idUser)->get('UserDetails')->result_array();
			if(count($user) != 1) {
				throw new Exception("User of id " . $idUser. " not found.");
			}
			return $user[0];
		}
	}
?>