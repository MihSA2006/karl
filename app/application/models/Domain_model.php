<?php
	if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

	class Domain_model extends CI_Model {
		public function getDomains($idCountry) {
			return $this->db->where('idCountry', $idCountry)->get('Domain')->result_array();
		}
	}
?>